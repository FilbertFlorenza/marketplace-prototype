<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Apes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css');?>">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/33e5cd664a.js" crossorigin="anonymous"></script>
</head>
<body>
    <form id="test-form" action="<?= base_url('test/process_test');?>" method="post">
    <div class="container">
        <div class="topic-1">
            <div class="row">
                <div class="col-12 header">
                    English Grammar MCQ | Taty Julia's Assesment Test 
                </div>
            </div>

            <div class="row question-1">
                <div class="col-12 question-title">
                    1. Sarah asked me, “What would you __________ if you were in my shoes?”
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-1"  value="1">
                    <label for="answer">A. had done</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-1"  value="2">
                    <label for="answer">B. have done</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-1"  value="3">
                    <label for="answer">C. had been doing</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-1"  value="4">
                    <label for="answer">D. have been doing</label>
                </div>
            </div>

            <div class="row question-2" style="display:none;">
                <div class="col-12 question-title">
                    2. The arsonist __________ set fire to the old shophouses was apprehended by the police.
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-2"  value="1">
                    <label for="answer">A. who</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-2"  value="2">
                    <label for="answer">B. which</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-2"  value="3">
                    <label for="answer">C. whom</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-2"  value="4">
                    <label for="answer">D. whose</label>
                </div>
            </div>

            <div class="row question-3" style="display:none;">
                <div class="col-12 question-title">
                    3. __________the national record for the 100-metre breaststroke event was one of Rashid’s greatest achievements.
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-3"  value="1">
                    <label for="answer">A. Break</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-3"  value="2">
                    <label for="answer">B. Broke</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-3"  value="3">
                    <label for="answer">C. Broken</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-3"  value="4">
                    <label for="answer">D. Breaking</label>
                </div>
            </div>

            <div class="row question-4" style="display:none;">
                <div class="col-12 question-title">
                    4. Charissa balked __________ the prospect of spending a few days on a liner.
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-4"  value="1">
                    <label for="answer">A. at</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-4"  value="2">
                    <label for="answer">B. of</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-4"  value="3">
                    <label for="answer">C. on</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-4"  value="4">
                    <label for="answer">D. for</label>
                </div>
            </div>

            <div class="row question-5" style="display:none;">
                <div class="col-12 question-title">
                    5. Caleb was not aware of the surprise birthday party, __________?
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-5"  value="1">
                    <label for="answer">A. was he</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-5"  value="2">
                    <label for="answer">B. had he</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-5"  value="3">
                    <label for="answer">C. wasn't he</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-5"  value="4">
                    <label for="answer">D. hadn't he</label>
                </div>
            </div>

            <div class="row question-6" style="display:none;">
                <div class="col-12 question-title">
                    6. “Has anyone ever _____________ in a hot air balloon before?” the guide asked the tourists.
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-6"  value="1">
                    <label for="answer">A. fly</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-6"  value="2">
                    <label for="answer">B. flies</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-6"  value="3">
                    <label for="answer">C. flew</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-6"  value="4">
                    <label for="answer">D. flown</label>
                </div>
            </div>

            <div class="row question-7" style="display:none;">
                <div class="col-12 question-title">
                    7. It is imperative that I _____________ to the hospital immediately.
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-7"  value="1">
                    <label for="answer">A. go</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-7"  value="2">
                    <label for="answer">B. goes</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-7"  value="3">
                    <label for="answer">C. went</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-7"  value="4">
                    <label for="answer">D. am going</label>
                </div>
            </div>

            <div class="row question-8" style="display:none;">
                <div class="col-12 question-title">
                    8. If i _____________ you, I would make a police report about the robbery.
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-8"  value="1">
                    <label for="answer">A. am</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-8"  value="2">
                    <label for="answer">B. are</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-8"  value="3">
                    <label for="answer">C. was</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-8"  value="4">
                    <label for="answer">D. were</label>
                </div>
            </div>

            <div class="row question-9" style="display:none;">
                <div class="col-12 question-title">
                    9. He was _____________ the idea of buying a new car and opposed the notion strongly.
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-9"  value="1">
                    <label for="answer">A. in</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-9"  value="2">
                    <label for="answer">B. for</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-9"  value="3">
                    <label for="answer">C. against</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-9"  value="4">
                    <label for="answer">D. towards</label>
                </div>
            </div>
        </div>

        <div class="topic-2" style="display:none;">
            <div class="row">
                <div class="col-12 header">
                    English Vocab MCQ | Taty Julia's Assesment Test 
                </div>
            </div>

            <div class="row question-10">
                <div class="col-12 question-title">
                    1. The teacher told the class the____________________ of the story to ignite their interest in reading the book. 
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-10"  value="1">
                    <label for="answer">A. gist</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-10"  value="2">
                    <label for="answer">B. report</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-10"  value="3">
                    <label for="answer">C. account</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-10"  value="4">
                    <label for="answer">D. narration</label>
                </div>
            </div>

            <div class="row question-11" style="display:none;">
                <div class="col-12 question-title">
                    2. My father’s new company gives the employees better medical___________________ . 
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-11"  value="1">
                    <label for="answer">A. profits</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-11"  value="2">
                    <label for="answer">B. benefits</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-11"  value="3">
                    <label for="answer">C. assets</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-11"  value="4">
                    <label for="answer">D. advantages</label>
                </div>
            </div>


            <div class="row question-12" style="display:none;">
                <div class="col-12 question-title">
                    3. Joel is always so_______________ . He refuses to listen to other people’s opinions and always insists on people following his orders.  
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-12"  value="1">
                    <label for="answer">A. uncouth</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-12"  value="2">
                    <label for="answer">B. impulsive</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-12"  value="3">
                    <label for="answer">C. pretentious</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-12"  value="4">
                    <label for="answer">D. domineering</label>
                </div>
            </div>

            <div class="row question-13" style="display:none;">
                <div class="col-12 question-title">
                    4. Although they are twin sisters, they are very different. In fact,  their interests are rather____________________ . 
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-13"  value="1">
                    <label for="answer">A. diverse</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-13"  value="2">
                    <label for="answer">B. various</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-13"  value="3">
                    <label for="answer">C. multiple</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-13"  value="4">
                    <label for="answer">D. plentiful</label>
                </div>
            </div>

            <div class="row question-14" style="display:none;">
                <div class="col-12 question-title">
                    5. This disease is more________________ among the elderly. 
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-14"  value="1">
                    <label for="answer">A. regular</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-14"  value="2">
                    <label for="answer">B. general</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-14"  value="3">
                    <label for="answer">C. possible</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-14"  value="4">
                    <label for="answer">D. prevalent</label>
                </div>
            </div>

            <div class="row question-15" style="display:none;">
                <div class="col-12 question-title">
                    6. Lynn made a grimace of disgust when she caught a whiff of the stench  that __________________the attic. 
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-15"  value="1">
                    <label for="answer">A. percolated</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-15"  value="2">
                    <label for="answer">B. permeated</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-15"  value="3">
                    <label for="answer">C. penetrated</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-15"  value="4">
                    <label for="answer">D. perpetrated</label>
                </div>
            </div>

            <div class="row question-16" style="display:none;">
                <div class="col-12 question-title">
                    7. The burglar looked around___________________ before attempting to break into the mansion. 
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-16"  value="1">
                    <label for="answer">A. candidly</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-16"  value="2">
                    <label for="answer">B. privately</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-16"  value="3">
                    <label for="answer">C. intimately</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-16"  value="4">
                    <label for="answer">D. surreptitiously </label>
                </div>
            </div>

            <div class="row question-17" style="display:none;">
                <div class="col-12 question-title">
                    8. Since Nicole has always been interested in weather forecasting, she decided take up a major in_________________. 
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-17"  value="1">
                    <label for="answer">A. geology</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-17"  value="2">
                    <label for="answer">B. astrology</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-17"  value="3">
                    <label for="answer">C. archaeology</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-17"  value="4">
                    <label for="answer">D. meteorology</label>
                </div>
            </div>
        </div>

        <div class="topic-3" style="display:none;">
            <div class="row">
                <div class="col-12 header">
                    English Editing MCQ | Taty Julia's Assesment Test 
                </div>
            </div>

            <div class="row editing-question">
                <h2 style="font-weight:700;">Question</h2>
                <p class="grey">Choose the correct answer for this higlight word below</p>
                <p>The moment Rafiq opened his eyes, he knew that something was not right. He felt a <span class="red">(a) throwbing</span> pain in his head which made it almost impossible for him to get out of bed. Rafiq suspected that he was running a fever. Looking down at his arms, Rafiq saw that they were covered with small bumps. Rafiq could not believe it. His worst fears had come true. A few days ago, Keith, who sat beside Rafiq in class, had started scratching himself <span class="red">(b) unkontrowlerbly</span>. There were many red bumps all over Keith’s body. Wondering if Keith could be having an <span class="red">(c) alerjic</span>reaction , their form teacher sent Keith to the office to call his parents. They had to take him to see a doctor. Keith’s parents later called to say that Keith was exhibiting the <span class="red">(d) simptoms</span> of chickenpox. Since it was a <span class="red">(e) contageous</span> disease, the school doctor advised Keith to rest at home for two weeks. Now, looking down at the bumps which looked similar to those on Keith, Rafiq sighed heavily. He knew that he must have contracted chickenpox from his classmate.</p>
            </div>

            <div class="row question-18" style="display:none;">
                <div class="col-12 question-title">
                    1. The correct word for (a) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-18"  value="1">
                    <label for="answer">A. throwing</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-18"  value="2">
                    <label for="answer">B. throwbbing</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-18"  value="3">
                    <label for="answer">C. throbbing</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-18"  value="4">
                    <label for="answer">D. throbbling</label>
                </div>
            </div>

            <div class="row question-19" style="display:none;">
                <div class="col-12 question-title">
                    2. The correct word for (b) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-19"  value="1">
                    <label for="answer">A. uncontrollably</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-19"  value="2">
                    <label for="answer">B. uncontrollable</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-19"  value="3">
                    <label for="answer">C. unknowable</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-19"  value="4">
                    <label for="answer">D. uncontrol</label>
                </div>
            </div>

            <div class="row question-20" style="display:none;">
                <div class="col-12 question-title">
                    3. The correct word for (c) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-20"  value="1">
                    <label for="answer">A. alerkic</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-20"  value="2">
                    <label for="answer">B. allergic</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-20"  value="3">
                    <label for="answer">C. allerjic</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-20"  value="4">
                    <label for="answer">D. allergics</label>
                </div>
            </div>

            <div class="row question-21" style="display:none;">
                <div class="col-12 question-title">
                    4. The correct word for (d) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-21"  value="1">
                    <label for="answer">A. symptoms</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-21"  value="2">
                    <label for="answer">B. systems</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-21"  value="3">
                    <label for="answer">C. symbtoms</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-21"  value="4">
                    <label for="answer">D. symbols</label>
                </div>
            </div>

            <div class="row question-22" style="display:none;">
                <div class="col-12 question-title">
                    5. The correct word for (e) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-22"  value="1">
                    <label for="answer">A. contains</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-22"  value="2">
                    <label for="answer">B. contangious</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-22"  value="3">
                    <label for="answer">C. contagies</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-22"  value="4">
                    <label for="answer">D. contagious</label>
                </div>
            </div>
        </div>

        <div class="topic-4" style="display:none;">
            <div class="row">
                <div class="col-12 header">
                    English Synthesis and Transformation MCQ | Taty Julia's Assesment Test 
                </div>
            </div>

            <div class="row question-23" style="display:none;">
                <div class="col-12 question-title">
                    1.It is relaxing to walk along the beach. <br>
                    Walking ________________________________________________________________
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-23"  value="1">
                    <label for="answer">A. along the garden is relaxing.</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-23"  value="2">
                    <label for="answer">B. along the beach is relaxing.</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-23"  value="3">
                    <label for="answer">C. alone the beach is relaxing.</label>
                </div>
            </div>

            <div class="row question-24" style="display:none;">
                <div class="col-12 question-title">
                    2. Rahman was intrigued. The magician’s rabbit disappeared suddenly. <br> 
                    What intrigued Rahman ___________________________________________________
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-24"  value="1">
                    <label for="answer">A. was the sudden disappearance of the magician’s rabbit.</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-24"  value="2">
                    <label for="answer">B. was the sudden appearance of the magician’s rabbit.</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-24"  value="3">
                    <label for="answer">C. was the sudden disappearance of the magician’s cat.</label>
                </div>
            </div>

            <div class="row question-25" style="display:none;">
                <div class="col-12 question-title">
                    3. The plan was risky. Thomas went ahead with it. <br>
                    Regardless of ____________________________________________________________
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-25"  value="1">
                    <label for="answer">A. the risk, Thomas went ahead on the plan.</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-25"  value="2">
                    <label for="answer">B. the risk, Thomas didn't went ahead with the plan.</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-25"  value="3">
                    <label for="answer">C. the risk, Thomas went ahead with the plan.</label>
                </div>
            </div>
        </div>

        <div class="topic-5" style="display:none;">
            <div class="row">
                <div class="col-12 header">
                    English Grammar Cloze MCQ | Taty Julia's Assesment Test 
                </div>
            </div>

            <div class="row editing-question">
                <p>Honey ants are found only in certain parts of the world. The Aborigines of Northern Australia hunt for them <span class="red">(a)_______________</span> the rain. These ants are found under the Mulga tree. What the Aborigines look out for is a nest under this tree. Once they <span class="red">(b)_______________</span> found it, they start digging. They dig for hours and hours until they find the honey ants. </p>
            </div>

            <div class="row editing-question">
                <p>The Aborigines have to be careful <span class="red">(c)_______________</span> they dig because there are many holes in which honey ants can be found. There are holes in the Mulga tree as well as <span class="red">(d)________________</span>the ground. Sometimes, honey ants can be found inside the former but they are generally found in the holes underground. <span class="red">(e)_________________</span> the ants are found, they are carefully placed into a dish called a coolamon.</p>
            </div>

            <div class="row question-26" style="display:none;">
                <div class="col-12 question-title">
                    1. The correct word for (a) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-26"  value="1">
                    <label for="answer">A. on</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-26"  value="2">
                    <label for="answer">B. in</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-26"  value="3">
                    <label for="answer">C. have</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-26"  value="4">
                    <label for="answer">D. are</label>
                </div>
            </div>
            
            <div class="row question-27" style="display:none;">
                <div class="col-12 question-title">
                    2. The correct word for (b) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-27"  value="1">
                    <label for="answer">A. have</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-27"  value="2">
                    <label for="answer">B. would</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-27"  value="3">
                    <label for="answer">C. where</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-27"  value="4">
                    <label for="answer">D. over</label>
                </div>
            </div> 

            <div class="row question-28" style="display:none;">
                <div class="col-12 question-title">
                    3. The correct word for (c) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-28"  value="1">
                    <label for="answer">A. would</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-28"  value="2">
                    <label for="answer">B. around</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-28"  value="3">
                    <label for="answer">C. where</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-28"  value="4">
                    <label for="answer">D. but</label>
                </div>
            </div>
            
            <div class="row question-29" style="display:none;">
                <div class="col-12 question-title">
                    4. The correct word for (d) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-29"  value="1">
                    <label for="answer">A. in</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-29"  value="2">
                    <label for="answer">B. on</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-29"  value="3">
                    <label for="answer">C. over</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-29"  value="4">
                    <label for="answer">D. but</label>
                </div>
            </div>
            
            <div class="row question-30" style="display:none;">
                <div class="col-12 question-title">
                    5. The correct word for (e) is
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-30"  value="1">
                    <label for="answer">A. where</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-30"  value="2">
                    <label for="answer">B. would</label>
                </div>
    
                <div class="col-12 answer">
                    <input type="radio" name="answer-30"  value="3">
                    <label for="answer">C. which</label>
                </div>

                <div class="col-12 answer">
                    <input type="radio" name="answer-30"  value="4">
                    <label for="answer">D. after</label>
                </div>
            </div>

        </div>

        <div class="btn btn-lg btn-prev none" onclick="prevQuestion()">
            Prev
        </div>
        <div class="btn btn-lg btn-next" onclick="nextQuestion()" style="float:right;">
            Next
        </div>
        
        <button class="btn btn-lg submit-btn none" type="submit" style="float:right;">
        </i> Submit
        </button>
    </div>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    
    var questionNumber=1;
    var topicNumber=1;

    // $("#test-form").on("submit", function (e) {
    //     e.preventDefault();
    // });

    // Check radio button on div click and change background color for this element and sibling elements
    $( ".answer" ).click(function() {
        var radButton = $(this).find('input[type=radio]');
        $(radButton).prop("checked", true);
        var label = $(this).find('label');
        $(label).attr("style","color:#ffffff");
        $(this).attr("style","background-color : #6D34E0;");
        $(this).siblings().attr("style","background-color : #F7F3FF;")
        $(this).siblings().find('label').attr("style","color : #333333;")

        if(questionNumber > 1){
            $(".btn-prev").attr("disabled",false);
        }

        $(".btn-next").attr("disabled",false);
    });

    function prevQuestion(){
        if(questionNumber>1){
            $(".question-"+questionNumber).hide();
            questionNumber--;
            $(".question-"+questionNumber).show();

            //Change topic 
            if(questionNumber === 9 || questionNumber === 17  || questionNumber === 22 || questionNumber ===25){
                $(".topic-"+topicNumber).hide();
                topicNumber--;
                $(".topic-"+topicNumber).show();
            }

            //Enable / Disable Submit Button
            if(questionNumber === 30){
                $(".submit-btn").removeClass("none");
                $(".btn-next").addClass("none");
            }else{
                $(".submit-btn").addClass("none");
                $(".btn-next").removeClass("none");
            }

            if(questionNumber ===1){
                $(".btn-prev").addClass("none");
            }
        }
    }

    function nextQuestion(){
         if(questionNumber < 30){ //To Do : get amount of questions from database later
            $(".question-"+questionNumber).hide();
            questionNumber++;
            $(".question-"+questionNumber).show();  

            //Change topic
            if(questionNumber === 10 || questionNumber === 18 || questionNumber === 23 || questionNumber === 26){
                $(".topic-"+topicNumber).hide();
                topicNumber++;
                $(".topic-"+topicNumber).show();
            }

            //Enable / Disable Submit Button
            if(questionNumber === 30){
                $(".submit-btn").removeClass("none");
                $(".btn-next").addClass("none");
            }else{
                $(".submit-btn").addClass("none");
                $(".btn-next").removeClass("none");
            }

            $(".btn-prev").removeClass("none");
        }
    }

    $(".submit-btn").click(function(e){
        e.preventDefault();
        for (let i = 1; i < 31; i++) {
            console.log(i);
            if($('input[name="answer-'+i+'"]').is(":checked") == false){
                console.log('a');
                return false;
            }else{
                $("#test-form").submit();
            }       
        }  
    });

</script>
</html>