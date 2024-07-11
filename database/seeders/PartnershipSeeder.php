<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partnership;
class PartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Partnership::insert([
            ['consonant_id' => 1, 'name' => '가스신문', 'img_path' => $this->hashImageName('가스신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 1, 'name' => '간호사신문', 'img_path' => $this->hashImageName('간호사신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 1, 'name' => '국방전우신문', 'img_path' => $this->hashImageName('국방전우신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 1, 'name' => '국세신문', 'img_path' => $this->hashImageName('국세신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 1, 'name' => '국토매일', 'img_path' => $this->hashImageName('국토매일'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 1, 'name' => '기독교신문', 'img_path' => $this->hashImageName('기독교신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 1, 'name' => '기독교연합신문', 'img_path' => $this->hashImageName('기독교연합신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 1, 'name' => '기독신문', 'img_path' => $this->hashImageName('기독신문'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 2, 'name' => '내외뉴스통신', 'img_path' => $this->hashImageName('내외뉴스통신'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 2, 'name' => '농경과 원예', 'img_path' => $this->hashImageName('농경과 원예'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 2, 'name' => '농기자재신문', 'img_path' => $this->hashImageName('농기자재신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 2, 'name' => '농수축산신문', 'img_path' => $this->hashImageName('농수축산신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 2, 'name' => '농업인신문', 'img_path' => $this->hashImageName('농업인신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 2, 'name' => '농업축산신문', 'img_path' => $this->hashImageName('농업축산신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 2, 'name' => '농촌여성신문', 'img_path' => $this->hashImageName('농촌여성신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 2, 'name' => '농축유통신문', 'img_path' => $this->hashImageName('농축유통신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 2, 'name' => '농축환경신문', 'img_path' => $this->hashImageName('농축환경신문'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 3, 'name' => '대한복지문화신문', 'img_path' => $this->hashImageName('대한복지문화신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 3, 'name' => '데일리환경', 'img_path' => $this->hashImageName('데일리환경'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 3, 'name' => '독서신문', 'img_path' => $this->hashImageName('독서신문'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 5, 'name' => '메디칼 업저버', 'img_path' => $this->hashImageName('메디칼 업저버'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 5, 'name' => '물류신문', 'img_path' => $this->hashImageName('물류신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 5, 'name' => '밀교신문', 'img_path' => $this->hashImageName('밀교신문'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 6, 'name' => '병원신문', 'img_path' => $this->hashImageName('병원신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 6, 'name' => '보건신문', 'img_path' => $this->hashImageName('보건신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 6, 'name' => '불교신문', 'img_path' => $this->hashImageName('불교신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 6, 'name' => '뷰티누리', 'img_path' => $this->hashImageName('뷰티누리'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 7, 'name' => '세무사신문', 'img_path' => $this->hashImageName('세무사신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 7, 'name' => '소비자경제', 'img_path' => $this->hashImageName('소비자경제'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 7, 'name' => '시사포커스', 'img_path' => $this->hashImageName('시사포커스'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 7, 'name' => '시정일보', 'img_path' => $this->hashImageName('시정일보'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 7, 'name' => '식물저널', 'img_path' => $this->hashImageName('식물저널'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 7, 'name' => '식품외식경제', 'img_path' => $this->hashImageName('식품외식경제'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 7, 'name' => '식품음료신문', 'img_path' => $this->hashImageName('식품음료신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 7, 'name' => 'CMN', 'img_path' => $this->hashImageName('CMN'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 8, 'name' => '아시아뉴스통신', 'img_path' => $this->hashImageName('아시아뉴스통신'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '약국신문', 'img_path' => $this->hashImageName('약국신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '약사공론', 'img_path' => $this->hashImageName('약사공론'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '약사신문', 'img_path' => $this->hashImageName('약사신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '약업신문', 'img_path' => $this->hashImageName('약업신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '어패럴뉴스', 'img_path' => $this->hashImageName('어패럴뉴스'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '여성농업인신문', 'img_path' => $this->hashImageName('여성농업인신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '영농자재신문', 'img_path' => $this->hashImageName('영농자재신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '원예산업신문', 'img_path' => $this->hashImageName('원예산업신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '의학신문', 'img_path' => $this->hashImageName('의학신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '의협신문', 'img_path' => $this->hashImageName('의협신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '이뉴스투데이', 'img_path' => $this->hashImageName('이뉴스투데이'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 8, 'name' => '일요저널', 'img_path' => $this->hashImageName('일요저널'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 9, 'name' => '장업신문', 'img_path' => $this->hashImageName('장업신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 9, 'name' => '정보통신신문', 'img_path' => $this->hashImageName('정보통신신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 9, 'name' => '주간기독교', 'img_path' => $this->hashImageName('주간기독교'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 9, 'name' => '주간코스메틱', 'img_path' => $this->hashImageName('주간코스메틱'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 9, 'name' => '중소기업뉴스', 'img_path' => $this->hashImageName('중소기업뉴스'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 10, 'name' => '축산경제신문', 'img_path' => $this->hashImageName('축산경제신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 10, 'name' => '축산신문', 'img_path' => $this->hashImageName('축산신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 10, 'name' => '치의신보', 'img_path' => $this->hashImageName('치의신보'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 11, 'name' => '코리아쉬핑가제트', 'img_path' => $this->hashImageName('코리아쉬핑가제트'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 11, 'name' => 'KFF뉴스', 'img_path' => $this->hashImageName('KFF뉴스'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 12, 'name' => '틴타임즈', 'img_path' => $this->hashImageName('틴타임즈'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 13, 'name' => '팜앤파켓', 'img_path' => $this->hashImageName('팜앤파켓'), 'created_at' => now(), 'updated_at' => now()],

            ['consonant_id' => 14, 'name' => '한국건설신문', 'img_path' => $this->hashImageName('한국건설신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국교육신문', 'img_path' => $this->hashImageName('한국교육신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국기독공보', 'img_path' => $this->hashImageName('한국기독공보'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국기독타임즈', 'img_path' => $this->hashImageName('한국기독타임즈'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국농업신문', 'img_path' => $this->hashImageName('한국농업신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국농촌경제신문', 'img_path' => $this->hashImageName('한국농촌경제신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국대학신문', 'img_path' => $this->hashImageName('한국대학신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국무역신문', 'img_path' => $this->hashImageName('한국무역신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국섬유신문', 'img_path' => $this->hashImageName('한국섬유신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국성결신문', 'img_path' => $this->hashImageName('한국성결신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국식약경제신문', 'img_path' => $this->hashImageName('한국식약경제신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국식품의약신문', 'img_path' => $this->hashImageName('한국식품의약신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국식품정보신문', 'img_path' => $this->hashImageName('한국식품정보신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국임업신문', 'img_path' => $this->hashImageName('한국임업신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한국해운신문', 'img_path' => $this->hashImageName('한국해운신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한류앤뉴스통신', 'img_path' => $this->hashImageName('한류앤뉴스통신'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한우신문', 'img_path' => $this->hashImageName('한우신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '한의신문', 'img_path' => $this->hashImageName('한의신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '헬스컨슈머', 'img_path' => $this->hashImageName('헬스컨슈머'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '화광신문', 'img_path' => $this->hashImageName('화광신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '환경경영신문', 'img_path' => $this->hashImageName('환경경영신문'), 'created_at' => now(), 'updated_at' => now()],
            ['consonant_id' => 14, 'name' => '환경타임즈', 'img_path' => $this->hashImageName('환경타임즈'), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
    private function hashImageName($imageName)
    {
        // Normalize the image name
        if (class_exists('Normalizer')) {
            $normalized_name = \Normalizer::normalize($imageName, \Normalizer::FORM_C);
        } else {
            $normalized_name = $imageName;
        }

        // Encode the image name in UTF-8
        $encoded_name = utf8_encode($normalized_name);

        // Replace spaces with underscores (if required)
        $encoded_name = str_replace(' ', '_', $encoded_name);

        // Create a hash (SHA-256)
        $hash_hex = hash('sha256', $encoded_name);

        return $hash_hex.'.png';
    }
}
