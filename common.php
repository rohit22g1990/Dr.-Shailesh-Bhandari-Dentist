<?php

class Common {
    const DOCTOR_NAME = 'Shailesh Bhandari';
    const CLINIC_NAME = 'Dr Shailesh Bhandari Advance dental and orthodontic centre';
    const CLINIC_ADDRESS = 'Dr. Shailesh Bhandari Advance dental n orthodontic centre, MG Rd, Gandhi chowk, Manmad, Maharashtra 423104';
    const EMAIL_ADDRESS_SHAILESH_BHANDARI = 'shailsbds@gmail.com';
    const PHONE_NUMBER_SHAILESH_BHANDARI = '9890787291';
    
    

    /**
     * SERVICES CONSTANTS
     */

    const SERVICE_TEETH_WHITENING = 'Teeth Whitening';
    const SERVICE_ORTHODONTIC_TREATMENT = 'Orthodontic Treatment';
    const SERVICE_TOOTH_EXTRACTION = 'Tooth Extraction';
    const SERVICE_DENTAL_EXAMINATION = 'Dental Examination';
    const SERVICE_DENTAL_IMPLANT_FIXING = 'Dental Implant Fixing';
    const SERVICE_BLEACHING = 'Bleaching';
    const SERVICE_CERAMIC_CROWNS = 'Ceramic Crowns';
    const SERVICE_BRACES = 'Braces';
    const SERVICE_ROOT_CANAL = 'Root Canal';
    const SERVICE_COSMETIC_DENTISTRY = 'Cosmetic Dentistry';

    
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
                'phone' => '9890787291',
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
                'shortDescription' => 'Dental implants are easily the most popular and also the ideal solution, for replacing your missing tooth/teeth.',
                'longDescription' => 'Dental implants are easily the most popular and also the ideal solution, for replacing your missing tooth/teeth. They have definitely changed the course of dentistry in the last quarter of a century or so.
                A dental implant is basically a titanium post which is surgically inserted into the jawbone beneath the gum line to work as a tooth root. Post insertion, an implantologist will attach a crown on top of the implant to ensure the appearance of a natural tooth.
                Tooth Implants not only look and feel like your natural teeth but also function like.'
            ],







            [
                'service' => 'Teeth Whitening',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'Teeth whitening is a process of removing stains from the tooth surface and restoring the natural color of the teeth.',
                'longDescription' => 'Teeth whitening is a process of removing stains from the tooth surface and restoring the natural color of the teeth. Whitening is a one-time procedure performed by a dentist. It is amongst the most common and widely adopted cosmetic procedure. With the advent of the latest Dental technology, we have advanced whitening treatment procedures which give reliable and long-lasting results.'
            ],
            [
                'service' => 'Bleaching',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ],



            [
                'service' => 'Ceramic Crowns',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'ental Crowns are a tooth-shaped cap which is placed on the tooth to restore the shape, size, and appearance of the tooth',
                'longDescription' => 'Dental implants are easily the most popular and also the ideal solution, for replacing your missing tooth/teeth. They have definitely changed the course of dentistry in the last quarter of a century or so.
                A dental implant is basically a titanium post which is surgically inserted into the jawbone beneath the gum line to work as a tooth root. Post insertion, an implantologist will attach a crown on top of the implant to ensure the appearance of a natural tooth.
                Tooth Implants not only look and feel like your natural teeth but also function like.'
            ],
            [
                'service' => 'Extraction',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ],
            [
                'service' => 'Braces',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ],
            [
                'service' => 'Root Canal',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ],
            [
                'service' => 'Cosmetic Dentistry',
                'image' => 'assets/images/dental-implant-fixing.jpg',
                'shortDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.',
                'longDescription' => 'Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.'
            ],


            
            
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
            // '3.jpg',
            '4.jpg',
            // '5.jpg',
            '6.jpg',
            '7.jpg',
            // 'assets/images/gallery/8.jpg',
            '9.jpg',
            // '10.jpg',
            '11.jpg',
            '12.jpg',
            '13.jpg',
            '14.jpg',
            // '15.jpg',
            '16.jpg',
            '17.jpg'
        ];
    }

    public static function getServicesforModal() {
        return [
            'teethWhitening' => [
                'modalHeader' => 'WHAT IS TEETH WHITENING?',
                'image' => '../assets/images/teeth-white.jpg',
                'modalBody' => '<p>Teeth whitening is a process of removing stains from the tooth surface and restoring the natural color of the teeth. Whitening is a one-time procedure performed by a dentist. It is amongst the most common and widely adopted cosmetic procedure. With the advent of the latest Dental technology, we have advanced whitening treatment procedures which give reliable and long-lasting results.</p>
                <p>For better results do get it done from a trained dental professional.</p>'
            ],
            'dentalImplants' => [
                'modalHeader' => 'WHAT ARE DENTAL IMPLANTS?',
                'image' => '../assets/images/dental-implant.jpg',
                'modalBody' => '<p>Dental implants are easily the most popular and also the ideal solution, for replacing your missing tooth/teeth. They have definitely changed the course of dentistry in the last quarter of a century or so.
                A dental implant is basically a titanium post which is surgically inserted into the jawbone beneath the gum line to work as a tooth root. Post insertion, an implantologist will attach a crown on top of the implant to ensure the appearance of a natural tooth.
                Tooth Implants not only look and feel like your natural teeth but also function like.</p>'
            ], 
            'teethExtraction' => [
                'modalHeader' => 'WHY ARE TEETH REMOVED?',
                'image' => '../assets/images/teeth-extraction.jpg',
                'modalBody' => 'While many teens and some adults get their wisdom teeth removed, there are other reasons why tooth extraction may be necessary in adulthood.
                                Excessive tooth decay, tooth infection, and crowding can all require a tooth extraction. Those who get braces may need one or two teeth removed to provide room for their other teeth as they shift into place. Additionally, those who are undergoing chemotherapy or are about to have an organ transplant may need compromised teeth removed in order to keep their mouth healthy.
                                Tooth extraction is performed by a dentist or oral surgeon and is a relatively quick outpatient procedure with either local, general, intravenous anesthesia, or a combination. Removing visible teeth is a simple extraction. Teeth that are broken, below the surface, or impacted require a more involved procedure.'
            ],
            'ceramicCrowns' => [
                'modalHeader' => 'WHAT ARE DENTAL CROWNS?',
                'image' => '../assets/images/ceramic-crowns.jpg',
                'modalBody' => '<div class="container mt-5 mb-5 d-flex justify-content-center">
                <div class="inner-contentbox">
                    <h4><strong>When is Dental Crown needed?</strong></h4>
                    <p>Dental crowns are used as caps on missing or fractured tooth to protect the life of your teeth. Dental Crowns are needed to:</p>
                    <ul>
                        <li>Protect or restore a tooth from fracturing due to accident or trauma</li>
                        <li>Replace a tooth which is too large for a filling</li>
                        <li>Get a cap over Implant placed</li>
                        <li>Restore the tooth on which RCT was performed</li>
                        <li>Cover discolored, misshaped or badly formed tooth</li>
                        <li>Require a bridge in that case crowns are a must</li>
                    </ul>
                    <p>In addition, Dental Crown gives your tooth the strength, shape, size and help to improve the appearance of your tooth. If your dentist has advised, you to get a crown and you are delaying the process then there are chances that you can damage your tooth to the extent that extraction is the last resort.</p>
                    <p>Moreover, not getting a dental crown can wear down other adjacent teeth causing damage.</p>
                    <h4><strong>What are various types of Dental Crowns?</strong></h4>
                    <p>Dental Crowns can be made in variety come in various materials such as:</p>
                    <h6>Metal Crowns</h6>
                    <p>If someone is looking for long term and the durable solution then metal crowns are to the rescue. The gold crowns in these are the most used and bonds well with the tooth. These can even withstand hard chewing forces and biting. Being stronger they last longer and do not wear down easily. The only drawback is that they are visible from a distance hence, suitable only for molars.</p>
                    <h6>Porcelain-fused-to-metal</h6>
                    <p>If you have aesthetic concerns and also wish to have metal crowns inserted then these are the best option available. The inside of the teeth is made up of metal and the outer portion of the crown is made of porcelain, as a result, it has the dual advantage – metal which provides strength and porcelain which matches with the color of the teeth making it look like natural teeth. They look the most like natural teeth.</p>
                    <h6>Ceramic Crown</h6>
                    <p>If you do not want to have metal inserted inside your mouth but want the strength to match metal crowns then ceramic crowns are the best option available. Not only is the strong but blends more naturally with your tooth color making it unnoticed. It does not have any aesthetic concerns and is the best option for the front, back and even for the bridges. The problem of porcelain wearing down and metal being visible is solved by this Dental Crown. They may not be considered as an option for molars because forces applied while biting can wear down your teeth.</p>
    
                    <h6 class="ex_mr"><strong>DO’S AND DON’TS WITH DENTAL CROWNS</strong></h4>
                    <h6>DO’S</h6>
                    <ul class="no_space">
                    <li>Since the natural teeth are still beneath the crown and are vulnerable to decay, therefore, it is important to maintain good oral hygiene therefore brushing, rinsing and flossing should be followed regularly.</li>
                    <li>If you clench your teeth, then it is advised to use mouthguard to protect your crown and this also does not allow your teeth to wear down.</li>
                    <li>Get crowns only by a dental expert who is trained in placing dental implants. Poor placement of crowns can reduce the longevity of crowns.</li>
                    <li>Do visit your dentist every 6 months to ensure that your oral health is in the best care.</li>
                    </ul>
                    <h6>DON’TS</h6>
                    <ul>
                    <li>Do not use your teeth as tools as this will put pressure and will damage the crown</li>
                    <li>Do not bite your nails and chew pencils</li>
                    <li>Do not chew ice or candy which is hard</li>
                    <li>Do not eat sticky food</li>
                    <li>Do not consume too hot or too cold food as this might cause sensitivity</li>
                    </ul>
                    <h4 class="ex_mr"><strong>MYTHS ABOUT DENTAL CROWNS</strong></h4>
                    <p>Dental Crowns carry a lot of myths with them a few of them are:</p>
                    <h6>Dental Crowns do not look natural</h6>
                    <p>There is a misconception that dental crowns do not match with your teeth hence give the impression of an artificial tooth. However, with changes in technology crowns come in various material which looks exactly like your natural teeth. And even metal crowns are a good and viable option because they are used as molars and are never seen.</p>
                    <h6>Crowns last forever</h6>
                    <p>Though the crowns are now stronger and have longevity, yet they cannot last a lifetime. It also depends as to how well they are taken care of. To ensure they last longer visit your dentist after every 6 months, your dentist will monitor your crown and will replace it timely.</p>
                    <h6>Food and Beverage stains the crown</h6>
                    <p>The biggest myth that people carry. They believe that food and beverages can stain their teeth with time but in reality, the crowns are made of porcelain and ceramic which do not stain easily.</p>
                    <h6>Only used for restorative dentistry</h6>
                    <p>People believe that one gets crown only if they have fractured tooth, have undergone <a href="https://clovedental.in/specialties/root-canal-treatment/">root canal treatment</a> or have broken or chipped a tooth. But the truth is they are used in <a href="https://clovedental.in/specialties/smile-makeover/">cosmetic dentistry</a> as a way to enhance the appearance and to have a whiter and beautiful smile.</p>
                    <h6>Dental Crowns do not break or chip</h6>
                    <p>Though ceramic and porcelain are harder substances yet if you bite on something extremely hard, or face accident or trauma then your crown may break.</p>
                    <h6>You cannot get cavity with crowns</h6>
                    <p>Because crown covers your tooth, therefore, they become vulnerable to decay. Though crowns, as they are artificial, have no chances of decay yet the part below them can decay. It is, therefore, required to keep your teeth and the area around clean to prevent a cavity.</p>
                    <h4><strong>FREQUENTLY ASKED QUESTIONS</strong></h4>
                    <h6>Q.1.&nbsp;<strong><b>What Is The Cost Of Dental Crowns?</b></strong></h6>
                    <p><strong><b>Dental Crowns</b></strong>&nbsp;may be more expensive than fillings, but they have the advantage of actually lasting longer as well. At Clove Dental, we ensure that our patients always get the best quality and value for their money. Visit your nearest Clove Dental Clinic for more information.</p>
                    <h6>Q.2.&nbsp;<strong><b>How Long Does A Dental Crown Last?</b></strong></h6>
                    <p>Depending on several factors that include the case specifics, material, and compliance to oral hygiene routines, <strong><b>dental crowns</b></strong>&nbsp;may last anywhere between 5 to 15 years. We advise our patients to maintain their oral hygiene after implantation of dental crown.</p>
                    <h6>Q.3.&nbsp;<strong><b>Do Dental Crowns Hurt?</b></strong></h6>
                    <p>Before the procedure, dentists administer a local anaesthetic. Therefore getting <strong><b>dental crowns</b></strong>&nbsp;may not hurt. However, once the anaesthetic wears off, feeling soreness and sensitivity in the gums is usual, and it usually goes away in a few days.</p>
                    <h6>Q.4.&nbsp;<strong><b>Do One Needs a Dental Crown After RCT?</b></strong></h6>
                    <p>Root Canal Treatment means that the pulp inside the tooth will be cleared out. Therefore to provide strength after filling up the cavity, crowns are usually used. Adding a crown to the tooth after RCT is a must.</p>
                </div>
            </div>'
            ], 
        ];
        
    }
}


?>