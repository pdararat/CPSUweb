<?php

use Illuminate\Database\Seeder;

class CurriculaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('curricula')->delete();
        
        \DB::table('curricula')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'Bachelor-of-Science-Program-in-Information-Technology',
                'degree' => 'Bachelor Degree',
                'name_th' => 'หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ',
                'name_en' => 'Bachelor of Science Program in Information Technology',
            'degree_name_th' => 'วิทยาศาสตรบัณฑิต (เทคโนโลยีสารสนเทศ), วท.บ. (เทคโนโลยีสารสนเทศ)',
            'degree_name_en' => 'Bachelor of Science (Information Technology), B.Sc. (Information Technology)',
                'cost' => 19000,
                'credit' => 133,
                'enrollment_criteria' => 'สำเร็จการศึกษาระดับมัธยมศึกษาปีที่ 6 หรือเทียบเท่า',
                'graduation_criteria' => 'เกรดเฉลี่ยไม่ต่ำกว่า 2.00
เกรดเฉลี่ยวิชาเฉพาะไม่ต่ำกว่า 2.00',
                'entrance_subject' => '',
                'document' => '',
                'status' => 'enable',
                'file' => 32,
                'created_at' => '2017-05-07 12:04:22',
                'updated_at' => '2017-05-09 08:54:50',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'Bachelor-of-Science-Program-in-Computer-Science',
                'degree' => 'Bachelor Degree',
                'name_th' => 'หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์',
                'name_en' => 'Bachelor of Science Program in Computer Science',
            'degree_name_th' => 'วิทยาศาสตรบัณฑิต (วิทยาการคอมพิวเตอร์), วท.บ. (วิทยาการคอมพิวเตอร์)',
            'degree_name_en' => 'Bachelor of Science (Computer Science), B.Sc. (Computer Science)',
                'cost' => 19000,
                'credit' => 133,
                'enrollment_criteria' => 'สำเร็จการศึกษาระดับมัธยมศึกษาปีที่ 6 หรือเทียบเท่า',
                'graduation_criteria' => 'เกรดเฉลี่ยไม่ต่ำกว่า 2.00
เกรดเฉลี่ยวิชาเฉพาะไม่ต่ำกว่า 2.00',
                'entrance_subject' => '',
                'document' => '',
                'status' => 'enable',
                'file' => 33,
                'created_at' => '2017-05-07 12:12:50',
                'updated_at' => '2017-05-09 08:52:03',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'Master-of-Science-in-Information-Technology',
                'degree' => 'Master Degree',
                'name_th' => 'หลักสูตรวิทยาศาสตรมหาบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ',
                'name_en' => 'Master of Science in Information Technology',
            'degree_name_th' => 'วิทยาศาสตรมหาบัณฑิต (เทคโนโลยีสารสนเทศ), วท.ม. (เทคโนโลยีสารสนเทศ)',
            'degree_name_en' => 'Master of Science (Information Technology), M.Sc. (Information Technology)',
                'cost' => 27000,
                'credit' => 36,
                'enrollment_criteria' => '<ol>
<li>เป็นผู้สำเร็จการศึกษาระดับปริญญาตรี สาขาวิชาเทคโนโลยีสารสนเทศ สาขาวิชาวิทยาการ
คอมพิวเตอร์ สาขาวิชาวิศวกรรมคอมพิวเตอร์ หรือสาขาวิชาอื่นๆ ที่เกี่ยวข้อง โดยมีค่าระดับคะแนนเฉลี่ยสะสม
ไม่น้อยกว่า 2.5 หรือ</li>
<li>เป็นผู้สำเร็จการศึกษาระดับปริญญาตรีและได้ศึกษารายวิชาทางด้านคอมพิวเตอร์หรือสารสนเทศ
มาแล้วไม่น้อยกว่า 15 หน่วยกิต โดยมีค่าระดับคะแนนเฉลี่ยสะสมไม่น้อยกว่า 2.5 หรือ
</li>
<li>เป็นผู้สำเร็จการศึกษาระดับปริญญาตรีหรือเทียบเท่าในสาขาอื่นๆ โดยมีประสบการณ์ทำงานที่
เกี่ยวข้องกับคอมพิวเตอร์หรือเทคโนโลยีสารสนเทศไม่น้อยกว่า 2 ปีโดยมีใบรับรองการปฏิบัติหน้าที่จากหน่วยงาน
ที่ปฏิบัติงานอยู่ในปัจจุบัน และ/หรือจากหน่วยงานที่เคยปฏิบัติงาน</li>
<li>เป็นผู้มีคุณสมบัติครบถ้วนตามข้อบังคับมหาวิทยาลัยศิลปากรว่าด้วยการศึกษาระดับบัณฑิตศึกษา
พ.ศ. 2550 ข้อ 7 และ/หรือที่มีการปรับปรุงเปลี่ยนแปลงภายหลัง</li>
<li>เป็นผู้มีคุณสมบัติตามที่คณะกรรมการประจำหลักสูตรพิจารณาว่าเหมาะสม</li>
</ol>',
            'graduation_criteria' => 'เสนอผลงานวิจัยในการประชุมวิชาการที่มีรายงานการประชุม (proceeding) ในระดับนานาชาติ
อย่างน้อย 1 เรื่อง โดยกำหนดให้นักศึกษาต้องเข้าร่วมการประชุมวิชาการระดับชาติ/นานาชาติที่เกี่ยวข้องกับ
สาขาวิชาอย่างน้อย 1 เรื่อง นักศึกษาต้องท าความรู้จักวิทยากร หรือผู้แสดงปาฐกถา (Speaker) คนใดคนหนึ่ง เพื่อ
เสริมสร้างเครือข่ายทางวิชาการระหว่างกันและพัฒนาทักษะการติดต่อสื่อสารภาษาอังกฤษทั้งกับนักวิชาการและ
นักศึกษาที่มีการศึกษาในระดับเดียวกัน และสรุปเป็นรายงานส่งสาขาวิชา',
                'entrance_subject' => '<ul>
<li>Information System</li>
<li>Basic Programming</li>
<li>Computer Network</li>
<li>Database</li>
</ul>',
                'document' => '<ol>
<li>ผลสอบภาษาอังกฤษจาก SEPT (Silpakorn English Proficiency Test) หรือหลักฐานการสมัครสอบ
SEPT หรือผลสอบภาษาอังกฤษจากสถาบันอื่นตามเกณฑ์ที่บัณฑิตวิทยาลัยกำหนด (ดูรายละเอียดในประกาศ
รับสมัครฯ ข้อ 3)</li>
<li>หลักฐานแสดงประสบการณ์วิจัย (สำหรับผู้สมัครแบบที่ 2 ข้อ 1)</li>
<li>หนังสือรับรองประสบการณ์การทำงาน (สำหรับผู้สมัครแบบที่ 2 ข้อ 2)</li>
<li>ในวันสอบสัมภาษณ์ ขอให้ผู้สมัครนำเอกสารหัวข้อและโครงการวิทยานิพนธ์ที่คาดว่าจะทำในระดับ
ปริญญาโทมานำเสนอด้วย</li>
<li>หนังสืออนุญาตลาศึกษาต่อจากหน่วยงานต้นสังกัด</li>
<li>สำหรับผู้ต้องการขอทุนผู้ช่วยสอนหรือทุนผู้ช่วยวิจัย ให้ส่งบทคัดย่อหรือไฟล์นำเสนอโครงงาน
วิทยานิพนธ์มาด้วย</li>
</ol>',
                'status' => 'enable',
                'file' => 34,
                'created_at' => '2017-05-07 12:23:32',
                'updated_at' => '2017-05-15 19:41:51',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'Doctor-of-Philosophy-in-Information-Technology',
                'degree' => 'Doctor Degree',
                'name_th' => 'หลักสูตรปรัชญาดุษฎีบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ',
                'name_en' => 'Doctor of Philosophy in Information Technology',
            'degree_name_th' => 'ปรัชญาดุษฎีบัณฑิต (เทคโนโลยีสารสนเทศ), ปร.ด. (เทคโนโลยีสารสนเทศ)',
            'degree_name_en' => 'Doctor of Philosophy (Information Technology), Ph.D. (Information Technology)',
                'cost' => 40000,
                'credit' => 48,
                'enrollment_criteria' => '<ol>
<li>มีคุณสมบัติครบถ้วนตามข้อบังคับมหาวิทยาลัยศิลปากรว่าด้วยการศึกษาระดับบัณฑิตศึกษา พ.ศ.
2550 ข้อ 7 และ/หรือที่มีการเปลี่ยนแปลงภายหลัง</li>
<li>เป็นผู้สำเร็จการศึกษาระดับปริญญามหาบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ หรือเทคโนโลยี
สารสนเทศ หรือสาขาวิชาวิศวกรรมคอมพิวเตอร์ หรือสาขาวิชาที่เกี่ยวข้อง หรือโดยความเห็นชอบของ
คณะกรรมการบริหารหลักสูตร</li>
<li>มีคุณสมบัติอื่นๆ ตามที่บัณฑิตวิทยาลัยกำหนด</li>
</ol>',
                'graduation_criteria' => '<ol>
<li>ผลงานวิทยานิพนธ์ทั้งหมดหรือบางส่วนจะต้องได้รับการตีพิมพ์เผยแพร่ หรือได้รับการตอบรับให้
ตีพิมพ์ในวารสารทางวิชาการระดับนานาชาติที่มีกรรมการภายนอกร่วมกลั่นกรอง (peer review) ซึ่งเป็น
ที่ยอมรับในสาขาวิชานั้น และโดยความเห็นชอบของคณะกรรมการหลักสูตร อย่างน้อย 1 เรื่อง</li>
<li>เสนอผลงานวิจัยในการประชุมวิชาการที่มีรายงานการประชุม (proceeding) ในระดับนานาชาติ
อย่างน้อย 1 เรื่อง โดยก าหนดให้นักศึกษาต้องเข้าร่วมการประชุมวิชาการระดับชาติ/นานาชาติที่เกี่ยวข้องกับ
สาขาวิชาอย่างน้อย 1 เรื่อง นักศึกษาต้องทำความรู้จักวิทยากร หรือผู้แสดงปาฐกถา (Speaker) คนใดคนหนึ่ง เพื่อ
เสริมสร้างเครือข่ายทางวิชาการระหว่างกันและพัฒนาทักษะการติดต่อสื่อสารภาษาอังกฤษทั้งกับนักวิชาการและ
นักศึกษาที่มีการศึกษาในระดับเดียวกัน และสรุปเป็นรายงานส่งสาขาวิชา</li>
</ol>',
                'entrance_subject' => '<ul>
<li>Information System</li>
<li>Basic Programming</li>
<li>Computer Network</li>
<li>Database</li>
</ul>',
                'document' => '<ol>
<li>เอกสารระบุงานวิจัยที่ประสงค์จะทำวิทยานิพนธ์หรือเค้าโครงวิทยานิพนธ์ฉบับย่อ ซึ่งประกอบด้วย
บทคัดย่อ ความสำคัญของปัญหา วัตถุประสงค์ และวิธีดำเนินการ (รับรองโดยคณาจารย์ในภาควิชาคอมพิวเตอร์)</li>
<li>ผลงานตีพิมพ์ทางวิชาการของผู้สมัคร (ถ้ามี)</li>
<li>ประวัติการศึกษาและประสบการณ์การทำงาน (curriculum vitae)</li>
<li>หนังสือรับรอง (recommendation letter) จำนวน 2 ฉบับ</li>
<li>หนังสืออนุญาตลาศึกษาต่อจากหน่วยงานต้นสังกัด</li>
<li>ให้นักศึกษาเตรียมโครงร่างวิทยานิพนธ์ที่สนใจจะทำ พร้อมการนำเสนอ 15 นาที (และชื่ออาจารย์
ที่ปรึกษา ถ้ามี จะได้รับการพิจารณาเป็นกรณีพิเศษ) มาในวันสอบสัมภาษณ์</li>
<li>ให้นักศึกษาเตรียมเอกสารวิทยานิพนธ์หรือการค้นคว้าอิสระระดับปริญญาโทมาในวันสอบสัมภาษณ์</li>
</ol>',
                'status' => 'enable',
                'file' => 35,
                'created_at' => '2017-05-07 12:29:00',
                'updated_at' => '2017-05-15 19:42:05',
            ),
        ));
        
        
    }
}