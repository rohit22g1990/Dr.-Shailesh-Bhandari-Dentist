<?php

class Common {
    const DOCTOR_NAME = 'Shailesh Bhandari';
    const CLINIC_NAME = 'Dr Shailesh Bhandari Advance dental and orthodontic centre';
    const CLINIC_ADDRESS = 'Dr. Shailesh Bhandari Advance dental n orthodontic centre, MG Rd, Gandhi chowk, Manmad, Maharashtra 423104';
    const EMAIL_ADDRESS_SHAILESH_BHANDARI = 'shailsbds@gmail.com';
    const PHONE_NUMBER_SHAILESH_BHANDARI = '9890787291';
    
    public static function getOpenTimings() {
        return [
            'Monday' => 'Closed',
            'Tuesday' => '10:00 - 8:00',
            'Wednesday' => '10:00 - 8:00',
            'Thursday' => '10:00 - 8:00',
            'Friday' => '10:00 - 8:00',
            'Saturday' => '10:00 - 8:00',
            'Sunday' => '10:00 - 8:00'
        ];
    }

    public static function getDoctors() {
        return [
            [
                'name' => 'Dr. Shailesh Bhandari',
                'education' => 'B.D.S, M.D.S (Gold Medalist)',
                'image' => 'assets/images/ShaileshBhandari-1.jpg',
                'email' => 'shailsbds@gmail.com',
                'phone' => '9890787291',
                'facebookHandle' => 'https://www.facebook.com/shailsbds',
                'twitterHandle' => '',
                'active' => true
            ],
            [
                'name' => 'Dr. Sonal Bhandari',
                'education' => 'B.D.S',
                'image' => 'assets/images/Team-2.jpg',
                'email' => 'shailsbds@gmail.com',
                'phone' => '989078729',
                'facebookHandle' => 'https://www.facebook.com/shailsbds',
                'twitterHandle' => '',
                'active' => true
            ]

        ];
    }

    public static function getServices() {
        return [
            [
                'service' => 'Orthodontic Treatment',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ],
            [
                'service' => 'Tooth Extraction',
                'image' => 'assets/images/tooth-extraction.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ],
            [
                'service' => 'Dental Examination',
                'image' => 'assets/images/g2.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ],
            [
                'service' => 'Dental Implant Fixing',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ]
        ];
    }



    /**
     * ORTHODONTICS
     */
    public static function getOrthodonticsFAQ() {
        return [
            [
                'que' => 'How long will it take?',
                'ans' => 'Treatment, or Orthodontic correction, can vary from the comparatively simple closing of front space in a few months, to the realignment of unsightly and disfiguring teeth, to a complete rehabilitation of a neglected mouth that could take up to two years or longer. Most Orthodontists agree that adult treatment will usually take from 10 to 20 percent longer due to the difference in the physiologic responses of the tissues in the mouth of an adult as compared with a ten or twelve year old. Simply put, an adult\'s bone structure is more dense and firmly set, so a slightly longer response time to tooth movement can be expected.' 
            ],
            [
                'que' => 'How much will it cost?',
                'ans' => 'Adult Orthodontic fees are only slightly higher than those required for younger patients.'
            ],
            [
                'que' => 'How do Orthodontists straighten teeth?',
                'ans' => 'Tooth movement is actually a normal response to light pressures exerted on teeth. Pressure is applied by using a variety of Orthodontic hardware (appliances), the most common being a brace or bracket attached to the teeth and connected by wires. By tightening the wires the teeth receive pressure.'
            ],
            [
                'que' => 'Will it hurt?',
                'ans' => 'Discomfort, which usually lasts for 48 to 72 hours, occurs as a result of braces. The teeth are comfortable after this period. Each subsequent monthly appointment may result in minor short term discomfort due to wire tightening.'
            ],
            [
                'que' => 'Why should I be concerned about a bad bite?',
                'ans' => 'Bad bites can be detrimental to a patient\'s health. Restorations, crowns or bridges are often impossible for a dentist to perform without prior repositioning of the teeth by an Orthodontist. Properly aligned and supported teeth are healthier, easier to clean, and therefore more likely to last longer.'
            ],
            [
                'que' => 'Will I look funny?',
                'ans' => 'No. Minor corrections can be accomplished with braces completely concealed within the mouth. More involved treatment may require braces on the teeth to successfully move them to the desired positions. Ceramic brackets, which are similar in color to teeth, are less obvious to the casual observer and offer the versatility of regular stainless steel braces.'
            ],
            [
                'que' => 'What about surgical correction?',
                'ans' => 'Surgical intervention called Orthognathic surgery can offer dramatic results in certain cases where jaw relationships are so severely malposed that tooth movement alone cannot accomplish desired changes. This treatment requires close cooperation between your Orthodontist and the Oral (Maxillofacial) surgeon. If indicated this can be a viable alternative to conventional Orthodontic treatment.'
            ],
            [
                'que' => 'How often will I need office visits?',
                'ans' => 'In the initial stage, the appointments are more frequent. Once the appliances (braces) are fabricated and in place, the adjustment appointments are scheduled at approximately once in three weeks.'
            ],
            [
                'que' => 'Will improvement be permanent?',
                'ans' => 'The combined experience of Orthodontists across the world, point to a 95 percent permanent improvement rate. Teeth, like all parts of the body, are constantly changing and adapting. Minor movement or relapse must be expected, but conscientious wear of retainers following treatment can minimize these changes.'
            ]
        ];
    }




    public static function getSurgicalOrthodonticsFAQs() {
        return [
            [
                'que' => 'What is Surgical Orthodontics?',
                'ans' => 'Surgical Orthodontics is a form of dental surgery to correct severe cases of bad bites, irregular teeth and jawbone abnormalities.'
            ],
            [
                'que' => 'When is Surgical Orthodontics required?',
                'ans' => 'The upper and lower jaws are the bases upon which the teeth are aligned. When the jaws are too far apart, the proper bite cannot be achieved with braces alone. The Orthodontist then embarks upon a treatment mode that plans for future surgical intervention. Surgery is the only treatment option in these severe cases.'
            ],
            [
                'que' => 'What is the treatment approach?',
                'ans' => 'Most Orthodontic patients undergo an initial period of orthodontic treatment to align the teeth (anywhere between 4 to 12 months) so that they will fit properly after surgery is completed. Surgery usually is not scheduled until the teeth have been properly aligned. <br />
                          Orthodontic appliances used to align teeth prior to surgery are left in place during the surgical procedure to aid in stabilizing the teeth and jawbones. After surgery there is a period of follow-up Orthodontic treatment to achieve final alignment of the teeth, thus complementing the new facial symmetry.'
            ],
            [
                'que' => 'Can surgery be avoided?',
                'ans' => 'In younger patients, future facial growth combined with timely Orthodontic intervention can sometimes correct protrusion and/or retrusion of the jawbone. An Orthodontist working with children as young as age 7, can use one of several Orthodontic appliances to direct bone growth, thus eliminating the need for surgery in some patients. However, in adults, and in those patients who have completed their bone growth, the improper tooth/bone relationship is frequently treated with surgery.'
            ],
            [
                'que' => 'Are there any risks?',
                'ans' => 'The portion of surgical orthodontic treatment provided by an Oral Surgeon entails the usual risks inherent with any type of surgery.'
            ],
        ];
    }

    public static function getFoodsToAvoid() {
        return [
            'Chewy foods',
            'Crunchy foods: popcorn, chips',
            'Sticky foods: éclairs, mars, 5-star, aampapar, chewing gum',
            'Hard foods: nuts, candy, ice cube',
            'Foods you have to bite into: corn on the cob, apples, carrots',
            'Chewing on hard things (for example, pens, pencils or fingernails) can damage the braces. Damaged braces will cause treatment to take longer'
        ];
    }

    public static function getGalleryImages() {
        return [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
            // 'assets/images/gallery/8.jpg',
            '9.jpg',
            '10.jpg',
            '11.jpg',
            '12.jpg',
            '13.jpg',
            '14.jpg',
            '15.jpg',
            '16.jpg',
            '17.jpg'
        ];
    }
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
















}


?>