<?php

namespace App\Http\Controllers;
use App\Research;
use App\ResearchImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
        $researches = Research::paginate(10);

        return view('research.index', ['researches' => $researches]);
    }

    public function create()
    {
        return view('research.create');
    }

    public function edit($id)
    {
        $research = Research::with('images')->findOrFail($id);
        return view('research.edit', ['research' => $research]);
        //return $research;
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $file = self::storeFile($file);

        $name = $request->get('name');
        $slug = self::handleSlug($name);

        $research = [
            'name' => $name,
            'slug' => $slug,
            'owner' => $request->get('owner'),
            'description' => $request->get('description'),
            'file_id' => $file->id
        ];

        $research = Research::create($research);

        $keys = ['image1', 'image2', 'image3', 'image4', 'image5'];
        $i = 1;
        foreach ($keys as $key){
            $image = $request->file($key);
            if(isset($image)){
                $image = self::storeFile($image);
                $research_image = [
                    'research_id' => $research->id,
                    'image_id' => $image->id,
                    'name' => $request->get('name'.$i),
                    'description' => $request->get('description'.$i)
                ];

                ResearchImage::create($research_image);
            }
            $i++;
        }
        $research->images;

        return redirect()->action('AdminController@research');
    }

    public function update(Request $request, $id)
    {
        $research = Research::findOrFail($id);
        $new_research = $request->all();

        $file = $request->file('file');
        if(isset($file)){
            $file = self::storeFile($file);
            $new_research['file_id'] = $file->id;
        }
        $research->update($new_research);

        for ($i = 1; $i <= 5; $i++){
            if(isset($new_research['image'.$i])){
                $image = self::storeFile($new_research['image'.$i]);
                if(isset($new_research['id'.$i])){
                    $research_image = ResearchImage::where([
                        ['research_id', $research->id],
                        ['image_id', $new_research['id'.$i]]
                    ])->first();

                    $data = [
                        'research_id' => $research->id,
                        'image_id' => $image->id,
                        'name' => $new_research['name'.$i],
                        'description' => $new_research['description'.$i]
                    ];
                    $research_image->update($data);
                }else{
                    $research_image = new ResearchImage();
                    $research_image->research_id = $research->id;
                    $research_image->image_id = $image->id;
                    $research_image->name = $new_research['name'.$i];
                    $research_image->description = $new_research['description'.$i];
                    $research_image->save();
                }
            }
            else{
                if(isset($new_research['id'.$i])) {
                    $research_image = ResearchImage::where([
                        ['research_id', $research->id],
                        ['image_id', $new_research['id' . $i]]
                    ])->first();

                    $data = [
                        'research_id' => $research->id,
                        'name' => $new_research['name' . $i],
                        'description' => $new_research['description' . $i]
                    ];
                    $research_image->update($data);
                }
            }
        }
        return redirect()->action('AdminController@research');
        //return $new_research;
    }

    public function show($slug)
    {
        $research = Research::where('slug', $slug)->firstOrFail();
        return view('research.show', ['research' => $research]);
    }

    public function storeFile($file)
    {
        // Todo fix bug file name cannot in thai
        $ex = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename(). '.' . $ex, File::get($file));

        $fileRecord = [
            'name' => $file->getFilename(). '.' . $ex,
            'mime' => $file->getClientMimeType(),
            'original_name' => $file->getClientOriginalName(),
        ];

        $file = \App\File::create($fileRecord);
        return $file;
    }

    public function handleSlug($str)
    {
        $slug = str_replace(' ', '-', $str);
        return $slug;
    }

    public function destroy($id)
    {
        $research = Research::findOrFail($id);
        $research_images = ResearchImage::where('research_id', $research->id)->get();
        foreach ($research_images as $image){
            $image->delete();
        }
        $research->delete();

        return redirect()->action('AdminController@research')->with('status', 'Delete Complete!');
    }
}
