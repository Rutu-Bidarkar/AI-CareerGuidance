<?php
$general = $_GET['general'] ?? 'Engineering & Technology';
$sub = $_GET['sub'] ?? 'Software Engineer';
$details = [
    'Software Engineer' => [
        'overview' => 'Software engineers apply engineering principles to design and build software products.',
        'skills' => 'Programming (C++, Python, Java), Problem-solving, System Design',
        'roadmap' => '<div class="roadmap-grid">
                        <div class="roadmap-item"><input type="checkbox"> 1) Learn Programming</div>
                        <div class="roadmap-item"><input type="checkbox"> 2) Master DSA</div>
                        <div class="roadmap-item"><input type="checkbox"> 3) Learn System Design</div>
                        <div class="roadmap-item"><input type="checkbox"> 4) Build Projects</div>
                        <div class="roadmap-item"><input type="checkbox"> 5) Apply for Jobs</div>
                      </div>',
        'resources' => '<ul><li><a href="https://leetcode.com/">LeetCode</a></li><li><a href="https://geeksforgeeks.org/">GeeksforGeeks</a></li></ul>',
        'jobRoles' => 'Frontend Developer, Backend Developer, Fullstack Developer',
        'salary' => '₹5-15 LPA in India',
        'futureScope' => 'High demand with evolving technologies like AI, Blockchain, Cloud Computing.',
        'successStory' => 'Example: Sundar Pichai started as a software engineer and is now the CEO of Google.',
        'youtube' => 'https://www.youtube.com/embed/2tZs2S5gmg0'
    ],
    'Data Scientist' => [
        'overview' => 'Data Scientists extract insights from data to help businesses make decisions.',
        'skills' => 'Python, R, Machine Learning, Statistics, SQL',
        'roadmap' => '<div class="roadmap-grid">
                        <div class="roadmap-item"><input type="checkbox"> 1) Learn Python & Stats</div>
                        <div class="roadmap-item"><input type="checkbox"> 2) Master ML algorithms</div>
                        <div class="roadmap-item"><input type="checkbox"> 3) Work on real-world projects</div>
                      </div>',
        'resources' => '<ul><li><a href="https://kaggle.com/">Kaggle</a></li><li><a href="https://coursera.org/">Coursera</a></li></ul>',
        'jobRoles' => 'Data Analyst, ML Engineer, AI Researcher',
        'salary' => '₹10-30 LPA in India',
        'futureScope' => 'Growing with advancements in AI and Big Data.',
        'successStory' => 'Example: DJ Patil, former Chief Data Scientist of the US.',
        'youtube' => 'https://www.youtube.com/embed/ua-CiDNNj30'
    ],
    'AI Engineer' => [
        'overview' => 'AI Engineers build and deploy artificial intelligence models.',
        'skills' => 'Machine learning, Python, data analysis, neural networks.',
        'roadmap' => '<div class="roadmap-grid">
                        <div class="roadmap-item"><input type="checkbox"> 1) Learn Python and ML libraries</div>
                        <div class="roadmap-item"><input type="checkbox"> 2) Study AI algorithms</div>
                        <div class="roadmap-item"><input type="checkbox"> 3) Work on AI projects</div>
                      </div>',
        'resources' => '<ul><li><a href="https://kaggle.com/">Kaggle</a></li><li>"Deep Learning" by Ian Goodfellow</li></ul>',
        'jobRoles' => 'Develop AI models, optimize algorithms, analyze data.',
        'salary' => '₹10-60 LPA in India',
        'futureScope' => 'Growing demand in healthcare, finance, and automation.',
        'successStory' => 'Example: Andrew Ng (AI Pioneer).',
        'youtube' => 'https://www.youtube.com/embed/aircAruvnKk'
    ],
    'Mechanical Engineer' => [
        'overview' => 'Designs and builds mechanical systems, engines, and manufacturing processes.',
        'skills' => 'CAD software, thermodynamics, problem-solving, physics.',
        'roadmap' => '<div class="roadmap-grid">
                        <div class="roadmap-item"><input type="checkbox"> 1) Earn a degree in Mechanical Engineering</div>
                        <div class="roadmap-item"><input type="checkbox"> 2) Learn CAD tools</div>
                        <div class="roadmap-item"><input type="checkbox"> 3) Get hands-on experience</div>
                        <div class="roadmap-item"><input type="checkbox"> 4) Obtain certifications</div>
                      </div>',
        'resources' => 'Books: Shigley’s Mechanical Engineering Design | Websites: Coursera, MIT OpenCourseWare.',
        'jobRoles' => 'Mechanical Engineer, Automotive Engineer, Manufacturing Engineer.',
        'salary' => '$70,000 - $120,000 per year.',
        'futureScope' => 'Robotics, 3D printing, and automation.',
        'successStory' => 'Success Story: Henry Ford (Automobile Pioneer).',
        'youtube' => 'https://www.youtube.com/embed/NDa3AGPobS4'
    ],
       'Civil Engineer' => [
        'overview' => 'Designs and oversees infrastructure projects like bridges, roads, and buildings.',
        'skills' => 'Structural analysis, project management, AutoCAD, problem-solving.',
        'roadmap' => '<div class="roadmap-grid">
                        <div class="roadmap-item"><input type="checkbox"> 1) Get a degree in Civil Engineering</div>
                        <div class="roadmap-item"><input type="checkbox"> 2) Gain site experience</div>
                        <div class="roadmap-item"><input type="checkbox"> 3) Learn AutoCAD & Revit</div>
                        <div class="roadmap-item"><input type="checkbox"> 4) Get certified</div>
                      </div>',
        'resources' => 'Books: Structural Analysis by R.C. Hibbeler | Websites: Khan Academy, ASCE.',
        'jobRoles' => 'Structural Engineer, Site Manager, Urban Planner.',
        'salary' => '$60,000 - $110,000 per year.',
        'futureScope' => 'Smart cities, green infrastructure, earthquake-resistant structures.',
        'successStory' => 'Success Story: Eero Saarinen (Architect of the Gateway Arch).',
        'youtube' => 'https://www.youtube.com/embed/LCyZFTEyNoo'
    ],
     'Electrical Engineer' => [
        'overview'=> "Works on electrical systems, circuits, and power grids.",
        'skills'=> "Circuit design, PCB designing, embedded systems, MATLAB.",
        'roadmap'=> '<div class="roadmap-grid">
                        <div class="roadmap-item"><input type="checkbox"> 1) Learn electrical fundamentals</div>
                        <div class="roadmap-item"><input type="checkbox"> 2) Study circuit design & microcontrollers</div>
                        <div class="roadmap-item"><input type="checkbox"> 3) Gain project experience</div>
                      </div>',
        'resources'=> "Books: The Art of Electronics | Websites: IEEE, Udemy.",
        'jobRoles'=> "Electronics Engineer, Power Systems Engineer, IoT Developer.",
        'salary'=> "$75,000 - $130,000 per year.",
        'futureScope'=> "Electric vehicles, renewable energy, smart grids.",
        'successStory'=> "Success Story: Nikola Tesla (Electrical Engineering Genius).",
        'youtube'=> "https://www.youtube.com/embed/dS4VU8KchWQ"
    ],
    'Robotics Engineer'=> [
    'overview'=> "Designs and develops robots for automation and AI applications.",
    'skills'=> "AI, Python, control systems, mechatronics, ROS (Robot Operating System).",
    'roadmap'=> '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_robotics_principles" name="1_Learn_robotics_principles">
                        <label for="1_Learn_robotics_principles">1) Learn robotics principles</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Work_with_Arduino_Raspberry_Pi" name="2_Work_with_Arduino_Raspberry_Pi">
                        <label for="2_Work_with_Arduino_Raspberry_Pi">2) Work with Arduino & Raspberry Pi</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Build_AI_powered_robots" name="3_Build_AI_powered_robots">
                        <label for="3_Build_AI_powered_robots">3) Build AI-powered robots</label>
                    </div>
                </div>',
    'resources'=> "Books: Introduction to Robotics by Craig | Websites: ROS.org, Coursera.",
    'jobRoles'=> "AI Engineer, Robotics Developer, Automation Expert.",
    'salary'=> "$80,000 - $150,000 per year.",
    'futureScope'=> "AI-powered robotics, autonomous vehicles, medical robotics.",
    'successStory'=> "Success Story: Marc Raibert (Founder of Boston Dynamics).",
    'youtube'=> "https://www.youtube.com/embed/IlefrA_C0V8"
],
'Aerospace Engineer'=> [
    'overview'=> "Designs aircraft, spacecraft, and satellite systems.",
    'skills'=> " Aerodynamics, MATLAB, propulsion systems, CAD.",
    'roadmap'=> '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Study_Aerospace_Engineering" name="1_Study_Aerospace_Engineering">
                        <label for="1_Study_Aerospace_Engineering">1) Study Aerospace Engineering</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Specialize_in_propulsion_or_avionics" name="2_Specialize_in_propulsion_or_avionics">
                        <label for="2_Specialize_in_propulsion_or_avionics">2) Specialize in propulsion or avionics</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Work_on_real_world_projects" name="3_Work_on_real_world_projects">
                        <label for="3_Work_on_real_world_projects">3) Work on real-world projects</label>
                    </div>
                </div>',
    'resources'=> "Books: Introduction to Flight by Anderson | Websites: NASA, MIT Aero.",
    'jobRoles'=> "Aircraft Designer, Space Engineer, Satellite Engineer.",
    'salary'=> "$85,000 - $150,000 per year.",
    'futureScope'=> "Space tourism, Mars missions, hypersonic travel.",
    'successStory'=> "Success Story: Elon Musk (SpaceX).",
    'youtube'=> "https://www.youtube.com/embed/uTreDAUe7w4"
],
'Game Developer'=> [
    'overview'=> "Designs and codes video games for various platforms.",
    'skills'=> "C++, Unity, Unreal Engine, storytelling, animation.",
    'roadmap'=> '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_game_engines" name="1_Learn_game_engines">
                        <label for="1_Learn_game_engines">1) Learn game engines</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Build_projects" name="2_Build_projects">
                        <label for="2_Build_projects">2) Build projects</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Collaborate_on_indie_games" name="3_Collaborate_on_indie_games">
                        <label for="3_Collaborate_on_indie_games">3) Collaborate on indie games</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Get_a_job_in_a_game_studio" name="4_Get_a_job_in_a_game_studio">
                        <label for="4_Get_a_job_in_a_game_studio">4) Get a job in a game studio</label>
                    </div>
                </div>',
    'resources'=> "Books: The Art of Game Design | Websites: Unity Learn, GDC Vault.",
    'jobRoles'=> "Game Programmer, Level Designer, Game Animator.",
    'salary'=> "$60,000 - $140,000 per year.",
    'futureScope'=> "VR/AR gaming, AI-driven NPCs, Metaverse games.",
    'successStory'=> "Success Story: Hideo Kojima (Metal Gear Creator).",
    'youtube'=> "https://www.youtube.com/embed/qPxvmrtTQ_4"
],
'Cybersecurity Analyst' => [
    'overview' => 'Protects systems from cyber threats and data breaches.',
    'skills' => 'Ethical hacking, network security, Python, penetration testing.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_cybersecurity_basics" name="1_Learn_cybersecurity_basics">
                        <label for="1_Learn_cybersecurity_basics">1) Learn cybersecurity basics</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Get_ethical_hacking_certification" name="2_Get_ethical_hacking_certification">
                        <label for="2_Get_ethical_hacking_certification">2) Get ethical hacking certification</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Gain_practical_experience" name="3_Gain_practical_experience">
                        <label for="3_Gain_practical_experience">3) Gain practical experience</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>Hacking: The Art of Exploitation</em></li><li>Websites: <a href="https://www.hackthebox.com/">Hack The Box</a>, <a href="https://owasp.org/">OWASP</a></li></ul>',
    'jobRoles' => 'Security Analyst, Penetration Tester, Cryptographer.',
    'salary' => '$80,000 - $140,000 per year.',
    'futureScope' => 'Rising cybersecurity threats increase demand for experts.',
    'successStory' => 'Success Story: Kevin Mitnick (Famous Ethical Hacker).',
    'youtube' => 'https://www.youtube.com/embed/fidenMBUIao'
],
    'Fashion Designer' => [
    'overview' => 'Fashion designers create clothing and accessories, blending creativity with market trends.',
    'skills' => 'Sketching, fabric knowledge, marketing, branding.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Get_a_Fashion_Design_degree" name="1_Get_a_Fashion_Design_degree">
                        <label for="1_Get_a_Fashion_Design_degree">1) Get a Fashion Design degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Work_under_designers_or_brands" name="2_Work_under_designers_or_brands">
                        <label for="2_Work_under_designers_or_brands">2) Work under designers or brands</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Launch_personal_collections_or_work_in_global_fashion_houses" name="3_Launch_personal_collections_or_work_in_global_fashion_houses">
                        <label for="3_Launch_personal_collections_or_work_in_global_fashion_houses">3) Launch personal collections or work in global fashion houses</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>The Fashion System</em> by Roland Barthes</li><li>Websites: <a href="https://www.voguebusiness.com/">Vogue Business</a>, <a href="https://fashionunited.in/">FashionUnited</a></li></ul>',
    'jobRoles' => 'Apparel Designer, Costume Designer, Textile Expert.',
    'salary' => '₹5 lakh - ₹50 lakh per year.',
    'futureScope' => 'AI-driven fashion, sustainable fabrics, 3D garment design.',
    'successStory' => 'Success Story: Manish Malhotra, Sabyasachi Mukherjee.',
    'youtube' => 'https://www.youtube.com/embed/feOScd2HdiU'
],
'Interior Designer' => [
    'overview' => 'Interior designers create functional and aesthetic spaces.',
    'skills' => 'Space planning, 3D modeling, color theory, architecture.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Study_Interior_Design" name="1_Study_Interior_Design">
                        <label for="1_Study_Interior_Design">1) Study Interior Design</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Work_in_architecture_interior_firms" name="2_Work_in_architecture_interior_firms">
                        <label for="2_Work_in_architecture_interior_firms">2) Work in architecture/interior firms</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Gain_expertise_build_a_personal_brand" name="3_Gain_expertise_build_a_personal_brand">
                        <label for="3_Gain_expertise_build_a_personal_brand">3) Gain expertise & build a personal brand</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>Domus: The Architecture and Design</em></li><li>Websites: <a href="https://www.houzz.in/">Houzz</a>, <a href="https://www.architecturaldigest.in/">Architectural Digest</a></li></ul>',
    'jobRoles' => 'Residential Designer, Commercial Space Planner, Set Designer.',
    'salary' => '₹5 lakh - ₹30 lakh per year.',
    'futureScope' => 'AI-driven design, smart homes, sustainable materials.',
    'successStory' => 'Success Story: Gauri Khan, Sunita Kohli.',
    'youtube' => 'https://www.youtube.com/embed/XHA7qROUKhw'
],
'UI/UX Designer' => [
    'overview' => 'Designs user interfaces and user experiences for digital products.',
    'skills' => 'Wireframing, Prototyping, Figma, UX Research, Adobe XD',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_UI_UX_basics" name="1_Learn_UI_UX_basics">
                        <label for="1_Learn_UI_UX_basics">1) Learn UI/UX basics</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Master_design_tools" name="2_Master_design_tools">
                        <label for="2_Master_design_tools">2) Master design tools</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Build_a_portfolio" name="3_Build_a_portfolio">
                        <label for="3_Build_a_portfolio">3) Build a portfolio</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Work_on_real_projects" name="4_Work_on_real_projects">
                        <label for="4_Work_on_real_projects">4) Work on real projects</label>
                    </div>
                </div>',
    'resources' => '<ul><li><a href="https://uxdesign.cc/">UX Design</a></li><li><a href="https://figma.com/">Figma</a></li></ul>',
    'jobRoles' => 'UI Designer, UX Researcher, Product Designer',
    'salary' => '₹6-20 LPA in India',
    'futureScope' => 'Growing demand with digital transformation.',
    'successStory' => 'Example: Julie Zhuo (Former VP of Product Design at Facebook).',
    'youtube' => 'https://www.youtube.com/embed/Q324oRLYhlM'
],
'Product Designer' => [
    'overview' => 'Product Designers create user-friendly and visually appealing products by combining design thinking, user experience (UX), and user interface (UI) design.',
    'skills' => 'UI/UX design, prototyping, user research, design thinking, graphic design, problem-solving.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_degree_in_Design_HCI_or_a_related_field" name="1_Earn_a_degree_in_Design_HCI_or_a_related_field">
                        <label for="1_Earn_a_degree_in_Design_HCI_or_a_related_field">1) Earn a degree in Design, HCI, or a related field</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Learn_tools_like_Figma_Sketch_Adobe_XD" name="2_Learn_tools_like_Figma_Sketch_Adobe_XD">
                        <label for="2_Learn_tools_like_Figma_Sketch_Adobe_XD">2) Learn tools like Figma, Sketch, Adobe XD</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Build_a_portfolio_with_real_world_projects" name="3_Build_a_portfolio_with_real_world_projects">
                        <label for="3_Build_a_portfolio_with_real_world_projects">3) Build a portfolio with real-world projects</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Gain_experience_through_internships" name="4_Gain_experience_through_internships">
                        <label for="4_Gain_experience_through_internships">4) Gain experience through internships</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="5_Apply_for_Product_Designer_roles" name="5_Apply_for_Product_Designer_roles">
                        <label for="5_Apply_for_Product_Designer_roles">5) Apply for Product Designer roles</label>
                    </div>
                </div>',
    'resources' => 'Books: The Design of Everyday Things by Don Norman | Websites: UX Collective, Interaction Design Foundation, Figma Community.',
    'jobRoles' => 'UI/UX Designer, Interaction Designer, Product Design Lead, UX Researcher.',
    'salary' => '₹7 lakh - ₹30 lakh per year.',
    'futureScope' => 'AI-driven design tools, immersive experiences (AR/VR), sustainable product design, personalized UX using machine learning.',
    'successStory' => 'Success Story: Julie Zhuo (Former VP of Product Design at Facebook, Author of The Making of a Manager).',
    'youtube' => 'https://www.youtube.com/embed/5RJI0TZiIUs'
],
'Animation & VFX Artist' => [
    'overview' => 'Animation & VFX artists create digital effects for movies, games, and media.',
    'skills' => '3D modeling, motion graphics, video editing, CGI.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_animation_software" name="1_Learn_animation_software">
                        <label for="1_Learn_animation_software">1) Learn animation software</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Work_in_studios_build_portfolio" name="2_Work_in_studios_build_portfolio">
                        <label for="2_Work_in_studios_build_portfolio">2) Work in studios & build portfolio</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Specialize_in_game_design_films_or_AR_VR" name="3_Specialize_in_game_design_films_or_AR_VR">
                        <label for="3_Specialize_in_game_design_films_or_AR_VR">3) Specialize in game design, films, or AR/VR</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>The Animator’s Survival Kit</em> by Richard Williams</li><li>Websites: <a href="https://www.blender.org/">Blender</a>, <a href="https://cgsociety.org/">CG Society</a></li></ul>',
    'jobRoles' => 'Character Animator, VFX Artist, Game Developer.',
    'salary' => '₹4 lakh - ₹30 lakh per year.',
    'futureScope' => 'AI-driven animation, virtual production, Metaverse.',
    'successStory' => 'Success Story: Prana Studios, Pixar India.',
    'youtube' => 'https://www.youtube.com/embed/PjnaShwzelU'
],
    'SEO Specialist' => [
    'overview' => 'SEO Specialists optimize websites to rank higher on search engines, driving organic traffic and improving visibility.',
    'skills' => 'SEO tools (Google Analytics, SEMrush), keyword research, content optimization, link building, HTML basics.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_SEO_fundamentals" name="1_Learn_SEO_fundamentals">
                        <label for="1_Learn_SEO_fundamentals">1) Learn SEO fundamentals</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Master_keyword_research_on_page_SEO" name="2_Master_keyword_research_on_page_SEO">
                        <label for="2_Master_keyword_research_on_page_SEO">2) Master keyword research & on-page SEO</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Understand_off_page_SEO_link_building" name="3_Understand_off_page_SEO_link_building">
                        <label for="3_Understand_off_page_SEO_link_building">3) Understand off-page SEO & link building</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Work_on_live_projects" name="4_Work_on_live_projects">
                        <label for="4_Work_on_live_projects">4) Work on live projects</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="5_Stay_updated_with_search_engine_algorithms" name="5_Stay_updated_with_search_engine_algorithms">
                        <label for="5_Stay_updated_with_search_engine_algorithms">5) Stay updated with search engine algorithms</label>
                    </div>
                </div>',
    'resources' => '<ul><li><a href="https://moz.com/">Moz</a></li><li><a href="https://ahrefs.com/blog/">Ahrefs Blog</a></li><li><a href="https://developers.google.com/search/docs">Google Search Central</a></li></ul>',
    'jobRoles' => 'SEO Analyst, SEO Manager, SEO Consultant, Digital Marketing Specialist.',
    'salary' => '₹4-15 LPA in India.',
    'futureScope' => 'Growing demand with digital marketing boom, evolving search algorithms, and voice search optimization.',
    'successStory' => 'Example: Rand Fishkin (Founder of Moz and SparkToro, SEO Expert).',
    'youtube' => 'https://www.youtube.com/embed/MYE6T_gd7H0'
],
'Digital Marketer' => [
    'overview' => 'Digital Marketers develop and execute online marketing strategies to promote brands, products, or services through digital channels such as social media, email, search engines, and websites.',
    'skills' => 'SEO & SEM, content marketing, social media management, email marketing, data analytics (Google Analytics), paid advertising (Google Ads, Facebook Ads), basic design skills (Canva, Adobe).',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Understand_core_concepts_of_digital_marketing" name="1_Understand_core_concepts_of_digital_marketing">
                        <label for="1_Understand_core_concepts_of_digital_marketing">1) Understand core concepts of digital marketing</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Learn_SEO_SEM_and_content_marketing" name="2_Learn_SEO_SEM_and_content_marketing">
                        <label for="2_Learn_SEO_SEM_and_content_marketing">2) Learn SEO, SEM, and content marketing</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Master_social_media_marketing_and_email_campaigns" name="3_Master_social_media_marketing_and_email_campaigns">
                        <label for="3_Master_social_media_marketing_and_email_campaigns">3) Master social media marketing and email campaigns</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Gain_expertise_in_paid_advertising_and_analytics" name="4_Gain_expertise_in_paid_advertising_and_analytics">
                        <label for="4_Gain_expertise_in_paid_advertising_and_analytics">4) Gain expertise in paid advertising and analytics</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="5_Work_on_real_world_projects_and_certifications" name="5_Work_on_real_world_projects_and_certifications">
                        <label for="5_Work_on_real_world_projects_and_certifications">5) Work on real-world projects and certifications (Google, HubSpot)</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="6_Stay_updated_with_industry_trends_and_tools" name="6_Stay_updated_with_industry_trends_and_tools">
                        <label for="6_Stay_updated_with_industry_trends_and_tools">6) Stay updated with industry trends and tools</label>
                    </div>
                </div>',
    'resources' => '<ul><li><a href="https://digitalgarage.withgoogle.com/">Google Digital Garage</a></li><li><a href="https://hubspot.com/academy">HubSpot Academy</a></li><li><a href="https://coursera.org/specializations/digital-marketing">Coursera Digital Marketing Specialization</a></li></ul>',
    'jobRoles' => 'Digital Marketing Specialist, Content Marketer, PPC Specialist, Social Media Manager, Email Marketing Manager, Digital Marketing Manager.',
    'salary' => '₹3-12 LPA in India, depending on experience and specialization.',
    'futureScope' => 'High demand with businesses shifting to online platforms, growth in influencer marketing, video content, and AI-powered marketing strategies.',
    'successStory' => 'Example: Neil Patel (Co-founder of Crazy Egg, Hello Bar, and KISSmetrics; a leading digital marketing influencer).',
    'youtube' => 'https://www.youtube.com/embed/bixR-KIJKYM',
],
'Journalist' => [
    'overview' => 'Journalists report news and investigate stories for print, TV, and digital media.',
    'skills' => 'Writing, research, communication, storytelling.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Study_Mass_Communication_Journalism" name="1_Study_Mass_Communication_Journalism">
                        <label for="1_Study_Mass_Communication_Journalism">1) Study Mass Communication/Journalism</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_experience_in_reporting" name="2_Gain_experience_in_reporting">
                        <label for="2_Gain_experience_in_reporting">2) Gain experience in reporting</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Build_a_portfolio" name="3_Build_a_portfolio">
                        <label for="3_Build_a_portfolio">3) Build a portfolio</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>The Elements of Journalism</em> by Bill Kovach</li><li>Websites: BBC Academy, Coursera</li></ul>',
    'jobRoles' => 'News Reporter, Investigative Journalist, Editor.',
    'salary' => '₹3 lakh - ₹15 lakh per year.',
    'futureScope' => 'Digital journalism, data journalism, and independent news platforms.',
    'successStory' => 'Success Story: Ravish Kumar (Renowned Indian Journalist).',
    'youtube' => 'https://www.youtube.com/embed/deip2YAygrM'
],
'News Anchor' => [
    'overview' => 'News Anchors present news, conduct interviews, and analyze events for TV and online platforms.',
    'skills' => 'Public speaking, confidence, research, on-camera presence.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_Journalism_degree" name="1_Earn_a_Journalism_degree">
                        <label for="1_Earn_a_Journalism_degree">1) Earn a Journalism degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_experience_in_reporting" name="2_Gain_experience_in_reporting">
                        <label for="2_Gain_experience_in_reporting">2) Gain experience in reporting</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Specialize_in_anchoring" name="3_Specialize_in_anchoring">
                        <label for="3_Specialize_in_anchoring">3) Specialize in anchoring</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>Broadcast Journalism</em> by Andrew Boyd</li><li>Websites: BBC Academy</li></ul>',
    'jobRoles' => 'News Anchor, Political Correspondent, TV Presenter.',
    'salary' => '₹5 lakh - ₹30 lakh per year.',
    'futureScope' => 'Growth in digital media and independent news platforms.',
    'successStory' => 'Success Story: Arnab Goswami (Indian News Anchor).',
    'youtube' => 'https://www.youtube.com/embed/jVxgZkbRKek'
],
'Content Strategist' => [
    'overview' => 'Content Writers create engaging written material for blogs, websites, social media, and publications.',
    'skills' => 'SEO, research, creativity, grammar, storytelling.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Improve_writing_skills_learn_SEO" name="1_Improve_writing_skills_learn_SEO">
                        <label for="1_Improve_writing_skills_learn_SEO">1) Improve writing skills & learn SEO</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Start_a_blog_or_freelance" name="2_Start_a_blog_or_freelance">
                        <label for="2_Start_a_blog_or_freelance">2) Start a blog or freelance</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Get_certifications_in_content_marketing" name="3_Get_certifications_in_content_marketing">
                        <label for="3_Get_certifications_in_content_marketing">3) Get certifications in content marketing</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>Everybody Writes</em> by Ann Handley</li><li>Websites: HubSpot, Udemy</li></ul>',
    'jobRoles' => 'Copywriter, Technical Writer, Blog Writer.',
    'salary' => '₹3 lakh - ₹12 lakh per year.',
    'futureScope' => 'AI-driven content, video scriptwriting, UX writing.',
    'successStory' => 'Success Story: Neil Patel (Content Marketing Expert).',
    'youtube' => 'https://www.youtube.com/embed/HL1JyPnk-QA'
],
    'Social Media Manager' => [
    'overview' => 'Social Media Managers handle brand presence on platforms like Instagram, LinkedIn, and Twitter.',
    'skills' => 'Marketing, analytics, graphic design, communication.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_social_media_tools_trends" name="1_Learn_social_media_tools_trends">
                        <label for="1_Learn_social_media_tools_trends">1) Learn social media tools & trends</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Manage_small_pages_run_campaigns" name="2_Manage_small_pages_run_campaigns">
                        <label for="2_Manage_small_pages_run_campaigns">2) Manage small pages & run campaigns</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Get_certified_in_digital_marketing" name="3_Get_certified_in_digital_marketing">
                        <label for="3_Get_certified_in_digital_marketing">3) Get certified in digital marketing</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>Jab, Jab, Jab, Right Hook</em> by Gary Vaynerchuk</li><li>Websites: Hootsuite Academy, Coursera</li></ul>',
    'jobRoles' => 'Community Manager, Brand Strategist, Influencer Manager.',
    'salary' => '₹4 lakh - ₹15 lakh per year.',
    'futureScope' => 'AI-based social media, influencer marketing, personal branding.',
    'successStory' => 'Success Story: Gary Vaynerchuk (Social Media Expert).',
    'youtube' => 'https://www.youtube.com/embed/n1RUbYq6Q'
],
'Film Director' => [
    'overview' => 'Film Directors manage the creative aspects of movie and video production.',
    'skills' => 'Storytelling, cinematography, leadership, editing.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_filmmaking_basics_work_on_short_films" name="1_Learn_filmmaking_basics_work_on_short_films">
                        <label for="1_Learn_filmmaking_basics_work_on_short_films">1) Learn filmmaking basics & work on short films</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Get_experience_as_an_assistant_director" name="2_Get_experience_as_an_assistant_director">
                        <label for="2_Get_experience_as_an_assistant_director">2) Get experience as an assistant director</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Join_a_film_school_FTII_NYFA_build_a_portfolio" name="3_Join_a_film_school_FTII_NYFA_build_a_portfolio">
                        <label for="3_Join_a_film_school_FTII_NYFA_build_a_portfolio">3) Join a film school (FTII, NYFA) & build a portfolio</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>On Directing Film</em> by David Mamet</li><li>Websites: Masterclass, Sundance Institute</li></ul>',
    'jobRoles' => 'Assistant Director, Screenwriter, Cinematographer.',
    'salary' => '₹8 lakh - ₹50 lakh+ per film (varies by experience).',
    'futureScope' => 'OTT platforms, AI in filmmaking, VR movies.',
    'successStory' => 'Success Story: Christopher Nolan, Rajkumar Hirani.',
    'youtube' => 'https://www.youtube.com/embed/Xoworgfk51I'
],
'Graphic Designer' => [
    'overview' => 'Creates visual content to communicate messages using typography and images.',
    'skills' => 'Adobe Photoshop, Illustrator, Creativity, Typography',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_design_fundamentals" name="1_Learn_design_fundamentals">
                        <label for="1_Learn_design_fundamentals">1) Learn design fundamentals</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Master_design_software" name="2_Master_design_software">
                        <label for="2_Master_design_software">2) Master design software</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Build_a_portfolio" name="3_Build_a_portfolio">
                        <label for="3_Build_a_portfolio">3) Build a portfolio</label>
                    </div>
                </div>',
    'resources' => '<ul><li><a href="https://behance.net/">Behance</a></li></ul>',
    'jobRoles' => 'Logo Designer, Visual Designer, Brand Identity Designer',
    'salary' => '₹4-15 LPA in India',
    'futureScope' => 'Key role in branding and marketing.',
    'successStory' => 'Example: Paula Scher (Renowned Graphic Designer).',
    'youtube' => 'https://www.youtube.com/embed/vkSOIkNWCww'
],
'Public Relations (PR) Specialist' => [
    'overview' => 'PR Specialists manage the public image and communication strategies of brands and individuals.',
    'skills' => 'Media relations, crisis management, communication, branding.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Get_a_degree_in_PR_Communications_or_Journalism" name="1_Get_a_degree_in_PR_Communications_or_Journalism">
                        <label for="1_Get_a_degree_in_PR_Communications_or_Journalism">1) Get a degree in PR, Communications, or Journalism</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Work_on_brand_communication_build_media_connections" name="2_Work_on_brand_communication_build_media_connections">
                        <label for="2_Work_on_brand_communication_build_media_connections">2) Work on brand communication & build media connections</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Join_PR_firms_specialize_in_a_niche" name="3_Join_PR_firms_specialize_in_a_niche">
                        <label for="3_Join_PR_firms_specialize_in_a_niche">3) Join PR firms & specialize in a niche</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>The New Rules of Marketing & PR</em> by David Meerman Scott</li><li>Websites: PRSA, LinkedIn Learning</li></ul>',
    'jobRoles' => 'Corporate Communications Manager, Brand Manager, Event Coordinator.',
    'salary' => '₹4 lakh - ₹18 lakh per year.',
    'futureScope' => 'AI in PR, digital reputation management, political PR.',
    'successStory' => 'Success Story: Richard Edelman (CEO, Edelman PR).',
    'youtube' => 'https://www.youtube.com/embed/4GtJHoITU_s'
],
'Photographer' => [
    'overview' => 'Photographers capture visuals for various industries like fashion, journalism, and advertising.',
    'skills' => 'Lighting, editing, composition, storytelling.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Learn_photography_techniques_invest_in_a_camera" name="1_Learn_photography_techniques_invest_in_a_camera">
                        <label for="1_Learn_photography_techniques_invest_in_a_camera">1) Learn photography techniques & invest in a camera</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Build_a_portfolio_assist_professionals" name="2_Build_a_portfolio_assist_professionals">
                        <label for="2_Build_a_portfolio_assist_professionals">2) Build a portfolio & assist professionals</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Take_photography_courses_freelance" name="3_Take_photography_courses_freelance">
                        <label for="3_Take_photography_courses_freelance">3) Take photography courses & freelance</label>
                    </div>
                </div>',
    'resources' => '<ul><li>Books: <em>Understanding Exposure</em> by Bryan Peterson</li><li>Websites: National Geographic Photography Guide</li></ul>',
    'jobRoles' => 'Fashion Photographer, Wildlife Photographer, Event Photographer.',
    'salary' => '₹3 lakh - ₹15 lakh per year.',
    'futureScope' => 'Drone photography, AI editing, 3D photography.',
    'successStory' => 'Success Story: Steve McCurry (Photographer of Afghan Girl).',
    'youtube' => 'https://www.youtube.com/embed/w5v3y8LqPxU'
],
'Doctor' => [
    'overview' => 'Provides medical care to patients and promotes health awareness.',
    'skills' => 'Medical knowledge, empathy, critical thinking, patient care',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Complete_MBBS" name="1_Complete_MBBS">
                        <label for="1_Complete_MBBS">1) Complete MBBS</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Specialize_through_MD_MS" name="2_Specialize_through_MD_MS">
                        <label for="2_Specialize_through_MD_MS">2) Specialize through MD/MS</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Gain_clinical_experience" name="3_Gain_clinical_experience">
                        <label for="3_Gain_clinical_experience">3) Gain clinical experience</label>
                    </div>
                </div>',
    'resources' => '<ul><li><a href="https://medlineplus.gov/">MedlinePlus</a></li></ul>',
    'jobRoles' => 'General Physician, Surgeon, Pediatrician',
    'salary' => '₹10-50 LPA in India',
    'futureScope' => 'Consistent demand with advancing medical technologies.',
    'successStory' => 'Example: Dr. Devi Shetty (Renowned Cardiac Surgeon).',
    'youtube' => 'https://www.youtube.com/embed/RrKGr3JYCGw'
],
    'Nurse' => [
    'overview' => 'Nurses provide patient care and assist doctors.',
    'skills' => 'Compassion, medical knowledge, teamwork, patient care.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Complete_BSc_Nursing" name="1_Complete_BSc_Nursing">
                        <label for="1_Complete_BSc_Nursing">1) Complete BSc Nursing</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_clinical_experience" name="2_Gain_clinical_experience">
                        <label for="2_Gain_clinical_experience">2) Gain clinical experience</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Specialize_ICU_Pediatrics_Oncology" name="3_Specialize_ICU_Pediatrics_Oncology">
                        <label for="3_Specialize_ICU_Pediatrics_Oncology">3) Specialize (ICU, Pediatrics, Oncology)</label>
                    </div>
                </div>',
    'resources' => 'Books: "Fundamentals of Nursing" by Potter & Perry. Websites: NursingTimes, Medscape.',
    'jobRoles' => 'Registered Nurse, ICU Nurse, Nurse Practitioner.',
    'salary' => '$50,000 - $100,000 per year.',
    'futureScope' => 'Growing demand for nurses in geriatric and home care.',
    'successStory' => 'Success Story: Florence Nightingale (Founder of Modern Nursing).',
    'youtube' => 'https://www.youtube.com/embed/J1vEkv1gAII'
],
'Physiotherapist' => [
    'overview' => 'Helps patients recover from injuries through physical therapy and rehabilitation.',
    'skills' => 'Anatomy, patient care, therapeutic exercises, biomechanics.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Get_a_degree_in_Physiotherapy" name="1_Get_a_degree_in_Physiotherapy">
                        <label for="1_Get_a_degree_in_Physiotherapy">1) Get a degree in Physiotherapy</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Complete_clinical_training" name="2_Complete_clinical_training">
                        <label for="2_Complete_clinical_training">2) Complete clinical training</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Get_certified" name="3_Get_certified">
                        <label for="3_Get_certified">3) Get certified</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Specialize" name="4_Specialize">
                        <label for="4_Specialize">4) Specialize</label>
                    </div>
                </div>',
    'resources' => 'Books: Orthopedic Physical Assessment | Websites: Physiopedia, APTA.',
    'jobRoles' => 'Rehabilitation Specialist, Sports Therapist, Clinical Physiotherapist.',
    'salary' => 'Approximately ₹3 lakh per annum for entry-level positions; with experience, salaries can rise to ₹8 lakh per annum.',
    'futureScope' => 'High demand in sports, rehabilitation, and elder care.',
    'successStory' => 'Success Story: Dr. Kelly Starrett (Renowned Physiotherapist).',
    'youtube' => 'https://www.youtube.com/embed/I70zVX85Kvo'
],
'Pharmacist' => [
    'overview' => 'Pharmacists dispense medications and provide guidance on their safe use to patients.',
    'skills' => 'Pharmacology, chemistry, medical ethics, communication.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_Pharmacy_degree" name="1_Earn_a_Pharmacy_degree">
                        <label for="1_Earn_a_Pharmacy_degree">1) Earn a Pharmacy degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Obtain_licensure" name="2_Obtain_licensure">
                        <label for="2_Obtain_licensure">2) Obtain licensure</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Work_in_healthcare_settings" name="3_Work_in_healthcare_settings">
                        <label for="3_Work_in_healthcare_settings">3) Work in healthcare settings (hospitals, community pharmacies)</label>
                    </div>
                </div>',
    'resources' => 'Books: Pharmacology for Health Professionals | Websites: FDA, Medscape.',
    'jobRoles' => 'Clinical Pharmacist, Research Pharmacist, Retail Pharmacist.',
    'salary' => 'Starting salaries for B.Pharm graduates may be modest; however, with advancement into roles like Medical Research Scientist or Drug Regulatory Affairs Specialist, annual salaries can range from ₹8 lakh to ₹15 lakh.',
    'futureScope' => 'Growth in personalized medicine and biotechnology fields.',
    'successStory' => 'Success Story: Alexander Fleming (Discovered Penicillin).',
    'youtube' => 'https://www.youtube.com/embed/Pk_wHvFYzjY'
],
'Nutritionist/Dietitian' => [
    'overview' => 'Nutritionists and dietitians provide dietary advice to promote health and manage diseases.',
    'skills' => 'Nutritional science, diet planning, counseling, health assessment.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_degree_in_Nutrition_or_Dietetics" name="1_Earn_a_degree_in_Nutrition_or_Dietetics">
                        <label for="1_Earn_a_degree_in_Nutrition_or_Dietetics">1) Earn a degree in Nutrition or Dietetics</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Complete_supervised_practice" name="2_Complete_supervised_practice">
                        <label for="2_Complete_supervised_practice">2) Complete supervised practice</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Obtain_certification_licensure" name="3_Obtain_certification_licensure">
                        <label for="3_Obtain_certification_licensure">3) Obtain certification/licensure</label>
                    </div>
                </div>',
    'resources' => 'Books: The China Study | Websites: Academy of Nutrition and Dietetics, MyPlate.',
    'jobRoles' => 'Clinical Dietitian, Sports Nutritionist, Public Health Nutritionist.',
    'salary' => 'Nutritionists or consulting dietitians can earn more than ₹5 lakh per annum.',
    'futureScope' => 'Increasing demand for experts in preventive health and wellness.',
    'successStory' => 'Success Story: Joy Bauer (Celebrity Nutritionist).',
    'youtube' => 'https://www.youtube.com/embed/VDOy9fBXDe8'
],
'Biotechnologist' => [
    'overview' => 'Biotechnologists utilize biological systems to develop products and technologies for healthcare, agriculture, and environmental management.',
    'skills' => 'Genetics, molecular biology, laboratory techniques, bioinformatics.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Pursue_a_degree_in_Biotechnology_or_related_field" name="1_Pursue_a_degree_in_Biotechnology_or_related_field">
                        <label for="1_Pursue_a_degree_in_Biotechnology_or_related_field">1) Pursue a degree in Biotechnology or related field</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Engage_in_research_projects" name="2_Engage_in_research_projects">
                        <label for="2_Engage_in_research_projects">2) Engage in research projects</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Obtain_advanced_degrees_or_certifications" name="3_Obtain_advanced_degrees_or_certifications">
                        <label for="3_Obtain_advanced_degrees_or_certifications">3) Obtain advanced degrees or certifications as needed</label>
                    </div>
                </div>',
    'resources' => 'Books: Molecular Biology of the Cell | Websites: National Institutes of Health (NIH), BioTechniques.',
    'jobRoles' => 'Biomedical Scientist, Genetic Engineer, Research Associate.',
    'salary' => 'Biotechnologists can earn between ₹5 lakh to ₹9 lakh per annum.',
    'futureScope' => 'Expanding roles in genetic engineering, biofuels, and disease research.',
    'successStory' => 'Success Story: Jennifer Doudna (CRISPR Pioneer).',
    'youtube' => 'https://www.youtube.com/embed/vBNGu6gEWw'
],
'Veterinary Doctor' => [
    'overview' => 'Veterinarians diagnose and treat medical conditions in animals, ensuring their health and welfare.',
    'skills' => 'Animal anatomy, surgical skills, diagnostics, client communication.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Obtain_a_Bachelor_of_Veterinary_Science_BVSc_degree" name="1_Obtain_a_Bachelor_of_Veterinary_Science_BVSc_degree">
                        <label for="1_Obtain_a_Bachelor_of_Veterinary_Science_BVSc_degree">1) Obtain a Bachelor of Veterinary Science (B.V.Sc) degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Complete_a_mandatory_internship" name="2_Complete_a_mandatory_internship">
                        <label for="2_Complete_a_mandatory_internship">2) Complete a mandatory internship</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Obtain_licensure" name="3_Obtain_licensure">
                        <label for="3_Obtain_licensure">3) Obtain licensure</label>
                    </div>
                </div>',
    'resources' => 'Books: Veterinary Medicine: A Textbook of the Diseases of Cattle | Websites: American Veterinary Medical Association (AVMA), Veterinary Information Network (VIN).',
    'jobRoles' => 'Veterinary Surgeon, Animal Welfare Officer, Research Veterinarian.',
    'salary' => 'Veterinarians can earn between ₹5 lakh to ₹8 lakh per annum.',
    'futureScope' => 'Growing demand in pet care, livestock health, and wildlife conservation.',
    'successStory' => 'Success Story: Dr. Jane Goodall (Primatologist & Animal Welfare Advocate).',
    'youtube' => 'https://www.youtube.com/embed/bwkdFg4h5fo'
],
'Chartered Accountant (CA)' => [
    'overview' => 'CAs handle financial records, audits, and taxation.',
    'skills' => 'Accounting, financial management, auditing, taxation.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Complete_CA_Foundation" name="1_Complete_CA_Foundation">
                        <label for="1_Complete_CA_Foundation">1) Complete CA Foundation</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Pass_CA_Intermediate_Final" name="2_Pass_CA_Intermediate_Final">
                        <label for="2_Pass_CA_Intermediate_Final">2) Pass CA Intermediate & Final</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Gain_practical_experience" name="3_Gain_practical_experience">
                        <label for="3_Gain_practical_experience">3) Gain practical experience</label>
                    </div>
                </div>',
    'resources' => 'Books: Financial Accounting by Mukherjee. Websites: ICAI, Investopedia.',
    'jobRoles' => 'Auditor, Tax Consultant, Financial Advisor.',
    'salary' => '$70,000 - $200,000 per year.',
    'futureScope' => 'Growing role in financial planning and forensic accounting.',
    'successStory' => 'Success Story: Naina Lal Kidwai (First Indian woman to graduate from Harvard Business School).',
    'youtube' => 'https://www.youtube.com/embed/NderkpSABzw'
],'Investment Banker' => [
    'overview' => 'Investment Bankers manage financial assets and mergers.',
    'skills' => 'Finance, risk analysis, negotiation, business strategy.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_finance_related_degree" name="1_Earn_a_finance_related_degree">
                        <label for="1_Earn_a_finance_related_degree">1) Earn a finance-related degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_experience_in_financial_markets" name="2_Gain_experience_in_financial_markets">
                        <label for="2_Gain_experience_in_financial_markets">2) Gain experience in financial markets</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Obtain_CFA_or_MBA" name="3_Obtain_CFA_or_MBA">
                        <label for="3_Obtain_CFA_or_MBA">3) Obtain CFA or MBA</label>
                    </div>
                </div>',
    'resources' => "Books: 'Investment Banking' by Joshua Rosenbaum. Websites: Wall Street Mojo, Investopedia.",
    'jobRoles' => 'Financial Analyst, M&A Advisor, Wealth Manager.',
    'salary' => '$90,000 - $300,000 per year.',
    'futureScope' => 'Increasing reliance on AI for stock market predictions.',
    'successStory' => 'Success Story: Warren Buffett (Investor and Financial Guru).',
    'youtube' => 'https://www.youtube.com/embed/Y2aI4TnUpr8'
],
'Financial Analyst' => [
    'overview' => 'Financial Analysts assess financial data and trends to guide business decisions and investments.',
    'skills' => 'Finance, risk analysis, negotiation, business strategy.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_finance_related_degree" name="1_Earn_a_finance_related_degree">
                        <label for="1_Earn_a_finance_related_degree">1) Earn a finance-related degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_experience_in_financial_markets" name="2_Gain_experience_in_financial_markets">
                        <label for="2_Gain_experience_in_financial_markets">2) Gain experience in financial markets</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Obtain_CFA_or_MBA" name="3_Obtain_CFA_or_MBA">
                        <label for="3_Obtain_CFA_or_MBA">3) Obtain CFA or MBA</label>
                    </div>
                </div>',
    'resources' => "Books: 'Investment Banking' by Joshua Rosenbaum. Websites: Wall Street Mojo, Investopedia.",
    'jobRoles' => 'Financial Analyst, M&A Advisor, Wealth Manager.',
    'salary' => '$90,000 - $300,000 per year.',
    'futureScope' => 'Increasing reliance on AI for stock market predictions.',
    'successStory' => 'Success Story: Warren Buffett (Investor and Financial Guru).',
    'youtube' => 'https://www.youtube.com/embed/E0w5tN77vPk'
],
'Business Manager' => [
    'overview' => 'Business Managers oversee operations, develop strategies, and ensure organizational goals are met.',
    'skills' => 'Leadership, strategic planning, decision-making, communication.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_degree_in_Business_Administration" name="1_Earn_a_degree_in_Business_Administration">
                        <label for="1_Earn_a_degree_in_Business_Administration">1) Earn a degree in Business Administration</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_managerial_experience" name="2_Gain_managerial_experience">
                        <label for="2_Gain_managerial_experience">2) Gain managerial experience</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Consider_an_MBA_for_advancement" name="3_Consider_an_MBA_for_advancement">
                        <label for="3_Consider_an_MBA_for_advancement">3) Consider an MBA for advancement</label>
                    </div>
                </div>',
    'resources' => 'Books: Good to Great by Jim Collins | Websites: Harvard Business Review, IIM websites.',
    'jobRoles' => 'Operations Manager, Project Manager, General Manager.',
    'salary' => '₹6 - ₹10 lakhs per annum.',
    'futureScope' => 'Diverse opportunities across industries with potential for leadership roles.',
    'successStory' => 'Success Story: Indra Nooyi (Former CEO of PepsiCo).',
    'youtube' => 'https://www.youtube.com/embed/OOmjnk5Ix_4'
],
'Digital Marketer' => [
    'overview' => 'Digital Marketers utilize online platforms to promote products and services, aiming to reach a targeted audience.',
    'skills' => 'SEO, content creation, social media management, analytics.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Complete_a_degree_in_Marketing_or_related_field" name="1_Complete_a_degree_in_Marketing_or_related_field">
                        <label for="1_Complete_a_degree_in_Marketing_or_related_field">1) Complete a degree in Marketing or related field</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_certifications_in_digital_marketing" name="2_Gain_certifications_in_digital_marketing">
                        <label for="2_Gain_certifications_in_digital_marketing">2) Gain certifications in digital marketing</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Build_a_portfolio_through_projects" name="3_Build_a_portfolio_through_projects">
                        <label for="3_Build_a_portfolio_through_projects">3) Build a portfolio through projects</label>
                    </div>
                </div>',
    'resources' => 'Books: Digital Marketing for Dummies by Ryan Deiss | Websites: Moz, HubSpot Academy.',
    'jobRoles' => 'SEO Specialist, Content Strategist, Social Media Manager.',
    'salary' => '₹5 - ₹10 lakhs per annum.',
    'futureScope' => 'Rapid growth with businesses shifting focus to online platforms.',
    'successStory' => 'Success Story: Neil Patel (Co-founder of Neil Patel Digital).',
    'youtube' => 'https://www.youtube.com/embed/bixR-KIJKYM'
],
'Entrepreneur' => [
    'overview' => 'Entrepreneurs create and manage new business ventures, assuming financial risks in the hope of profit.',
    'skills' => 'Innovation, risk management, leadership, resilience.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Identify_a_market_need" name="1_Identify_a_market_need">
                        <label for="1_Identify_a_market_need">1) Identify a market need</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Develop_a_business_plan" name="2_Develop_a_business_plan">
                        <label for="2_Develop_a_business_plan">2) Develop a business plan</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Secure_funding" name="3_Secure_funding">
                        <label for="3_Secure_funding">3) Secure funding</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Launch_and_manage_the_business" name="4_Launch_and_manage_the_business">
                        <label for="4_Launch_and_manage_the_business">4) Launch and manage the business</label>
                    </div>
                </div>',
    'resources' => 'Books: The Lean Startup by Eric Ries | Websites: Startup India, Y Combinator.',
    'jobRoles' => 'Business Owner, Startup Founder, CEO, Angel Investor.',
    'salary' => '₹5 lakh - ₹1 crore per year (varies based on success).',
    'futureScope' => 'Startups in AI, fintech, and sustainable energy are booming in India.',
    'successStory' => 'Success Story: Ritesh Agarwal (Founder, OYO).',
    'youtube' => 'https://www.youtube.com/embed/sy-KZNEO2Dk'
],
'Human Resource Manager' => [
    'overview' => 'HR Managers oversee recruitment, employee relations, and company policies.',
    'skills' => 'Communication, recruitment, conflict resolution, organizational skills.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Get_a_degree_in_HR_Management" name="1_Get_a_degree_in_HR_Management">
                        <label for="1_Get_a_degree_in_HR_Management">1) Get a degree in HR/Management</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_experience_in_hiring_compliance" name="2_Gain_experience_in_hiring_compliance">
                        <label for="2_Gain_experience_in_hiring_compliance">2) Gain experience in hiring & compliance</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Learn_HR_software" name="3_Learn_HR_software">
                        <label for="3_Learn_HR_software">3) Learn HR software</label>
                    </div>
                </div>',
    'resources' => 'Books: Work Rules! by Laszlo Bock | Websites: LinkedIn Learning, Coursera.',
    'jobRoles' => 'HR Manager, Talent Acquisition Specialist, Employee Relations Manager.',
    'salary' => '₹6 lakh - ₹25 lakh per year.',
    'futureScope' => 'Growing demand for HR tech and people analytics in companies.',
    'successStory' => 'Success Story: Laszlo Bock (Ex-Google HR Head).',
    'youtube' => 'https://www.youtube.com/embed/V4SOeR2vwt4'
],
'Hotel Manager' => [
    'overview' => 'Hotel Managers oversee operations, ensuring customer satisfaction and efficient service.',
    'skills' => 'Hospitality management, leadership, customer service, finance.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_degree_in_Hotel_Management" name="1_Earn_a_degree_in_Hotel_Management">
                        <label for="1_Earn_a_degree_in_Hotel_Management">1) Earn a degree in Hotel Management</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_experience_in_front_office_FB" name="2_Gain_experience_in_front_office_FB">
                        <label for="2_Gain_experience_in_front_office_FB">2) Gain experience in front office & F&B</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Work_up_to_management" name="3_Work_up_to_management">
                        <label for="3_Work_up_to_management">3) Work up to management</label>
                    </div>
                </div>',
    'resources' => 'Books: Hotel Management & Operations by Denney G. Rutherford | Websites: IHM, Coursera.',
    'jobRoles' => 'General Manager, Operations Manager, Front Desk Manager.',
    'salary' => '₹5 lakh - ₹30 lakh per year.',
    'futureScope' => 'Luxury tourism, sustainable hospitality, and hotel automation.',
    'successStory' => 'Success Story: Oberoi Hotels Management Team.',
    'youtube' => 'https://www.youtube.com/embed/jyWwVbz4sPE'
],
'Lawyer' => [
    'overview' => 'Lawyers provide legal advice, represent clients in court, and prepare legal documents.',
    'skills' => 'Legal research, critical thinking, negotiation, communication, analytical reasoning.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_law_degree_LLB" name="1_Earn_a_law_degree_LLB">
                        <label for="1_Earn_a_law_degree_LLB">1) Earn a law degree (LLB)</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Complete_internships" name="2_Complete_internships">
                        <label for="2_Complete_internships">2) Complete internships</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Pass_the_bar_exam" name="3_Pass_the_bar_exam">
                        <label for="3_Pass_the_bar_exam">3) Pass the bar exam</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Join_a_law_firm_or_practice_independently" name="4_Join_a_law_firm_or_practice_independently">
                        <label for="4_Join_a_law_firm_or_practice_independently">4) Join a law firm or practice independently</label>
                    </div>
                </div>',
    'resources' => 'Books: The Tools of Argument by Joel P. Trachtman | Websites: LegalZoom, Bar & Bench.',
    'jobRoles' => 'Corporate Lawyer, Criminal Lawyer, Family Lawyer, Intellectual Property Lawyer.',
    'salary' => '₹5 lakh - ₹50 lakh per year (varies by specialization and experience).',
    'futureScope' => 'Growing demand in cyber law, intellectual property, and international law with globalization.',
    'successStory' => 'Success Story: Harish Salve (Renowned Indian Lawyer, former Solicitor General of India).',
    'youtube' => 'https://www.youtube.com/embed/jyWwVbz4sPE'
],
'Civil Services' => [
    'overview' => 'IAS and IPS officers work in administration, law enforcement, and policy-making for the government.',
    'skills' => 'Decision-making, leadership, policy analysis, crisis management.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Complete_graduation" name="1_Complete_graduation">
                        <label for="1_Complete_graduation">1) Complete graduation</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Prepare_for_UPSC" name="2_Prepare_for_UPSC">
                        <label for="2_Prepare_for_UPSC">2) Prepare for UPSC</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Clear_Prelims_Mains_Interview" name="3_Clear_Prelims_Mains_Interview">
                        <label for="3_Clear_Prelims_Mains_Interview">3) Clear Prelims, Mains & Interview</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="4_Join_civil_services" name="4_Join_civil_services">
                        <label for="4_Join_civil_services">4) Join civil services</label>
                    </div>
                </div>',
    'resources' => 'Books: Indian Polity by M. Laxmikanth. Websites: UPSC.gov.in, Vision IAS.',
    'jobRoles' => 'IAS Officer, IPS Officer, District Magistrate, Commissioner.',
    'salary' => '₹8 lakh - ₹25 lakh per year.',
    'futureScope' => 'High demand for skilled officers in administration and policy-making.',
    'successStory' => 'Success Story: Armstrong Pame (IAS Officer known for infrastructure projects).',
    'youtube' => 'https://www.youtube.com/embed/PnTkK0vWv3c'
],
    'Judge' => [
    'overview' => 'Judges interpret laws and oversee court proceedings to ensure justice.',
    'skills' => 'Legal expertise, critical thinking, impartiality, decision-making.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_an_LLB" name="1_Earn_an_LLB">
                        <label for="1_Earn_an_LLB">1) Earn an LLB</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_experience_as_an_advocate" name="2_Gain_experience_as_an_advocate">
                        <label for="2_Gain_experience_as_an_advocate">2) Gain experience as an advocate</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Clear_Judiciary_Exams_PCS_J" name="3_Clear_Judiciary_Exams_PCS_J">
                        <label for="3_Clear_Judiciary_Exams_PCS_J">3) Clear Judiciary Exams (PCS-J)</label>
                    </div>
                </div>',
    'resources' => 'Books: The Nature of the Judicial Process by Benjamin Cardozo. Websites: Bar & Bench, SCC Online.',
    'jobRoles' => 'District Judge, High Court Judge, Supreme Court Judge.',
    'salary' => '₹12 lakh - ₹35 lakh per year.',
    'futureScope' => 'Increasing demand for specialized judges in cyber law and corporate law.',
    'successStory' => 'Success Story: Justice D. Y. Chandrachud (Chief Justice of India).',
    'youtube' => 'https://www.youtube.com/embed/_8C00KGief0'
],
'Bank PO' => [
    'overview' => 'Bank Probationary Officers manage banking operations, loans, and customer service.',
    'skills' => 'Banking knowledge, finance, customer handling, risk management.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_degree" name="1_Earn_a_degree">
                        <label for="1_Earn_a_degree">1) Earn a degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Clear_IBPS_SBI_PO_Exam" name="2_Clear_IBPS_SBI_PO_Exam">
                        <label for="2_Clear_IBPS_SBI_PO_Exam">2) Clear IBPS/SBI PO Exam</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Complete_probation_and_training" name="3_Complete_probation_and_training">
                        <label for="3_Complete_probation_and_training">3) Complete probation and training</label>
                    </div>
                </div>',
    'resources' => 'Books: Quantitative Aptitude by R.S. Aggarwal. Websites: IBPS.in, BankersAdda.',
    'jobRoles' => 'Bank PO, Branch Manager, Financial Analyst.',
    'salary' => '₹6 lakh - ₹12 lakh per year.',
    'futureScope' => 'Digital banking and fintech are expanding career opportunities.',
    'successStory' => 'Success Story: Raghuram Rajan (Ex-RBI Governor).',
    'youtube' => 'https://www.youtube.com/embed/s4eJD7NpRh4'
],
'Indian Army Officer' => [
    'overview' => 'Army Officers lead and manage troops, ensuring national security and conducting operations.',
    'skills' => 'Leadership, strategy, physical fitness, discipline.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Clear_NDA_CDS_exam_for_officers_or_apply_for_SSC_TGC_entries" name="1_Clear_NDA_CDS_exam_for_officers_or_apply_for_SSC_TGC_entries">
                        <label for="1_Clear_NDA_CDS_exam_for_officers_or_apply_for_SSC_TGC_entries">1) Clear NDA/CDS exam (for officers) or apply for SSC/TGC entries</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Pass_SSB_Interview_medical_tests" name="2_Pass_SSB_Interview_medical_tests">
                        <label for="2_Pass_SSB_Interview_medical_tests">2) Pass SSB Interview & medical tests</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Join_training_academies_IMA_OTA_etc" name="3_Join_training_academies_IMA_OTA_etc">
                        <label for="3_Join_training_academies_IMA_OTA_etc">3) Join training academies (IMA, OTA, etc.)</label>
                    </div>
                </div>',
    'resources' => 'Books: Pathfinder NDA by Arihant. Websites: joinindianarmy.nic.in.',
    'jobRoles' => 'Lieutenant, Captain, Major, Colonel.',
    'salary' => '₹8 lakh - ₹30 lakh per year (varies by rank).',
    'futureScope' => 'Special forces, UN peacekeeping, defense research roles.',
    'successStory' => 'Success Story: Captain Vikram Batra (Param Vir Chakra Awardee).',
    'youtube' => 'https://www.youtube.com/embed/4FTnzgP7lD8'
],
'Indian Navy Officer' => [
    'overview' => 'Navy Officers operate and manage maritime security, submarines, and aircraft carriers.',
    'skills' => 'Technical expertise, navigation, combat skills, decision-making.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Clear_NDA_CDS_exam_for_officers_or_apply_through_the_Navy’s_direct_entry_schemes" name="1_Clear_NDA_CDS_exam_for_officers_or_apply_through_the_Navy’s_direct_entry_schemes">
                        <label for="1_Clear_NDA_CDS_exam_for_officers_or_apply_through_the_Navy’s_direct_entry_schemes">1) Clear NDA/CDS exam (for officers) or apply through the Navy’s direct entry schemes</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Pass_SSB_Interview_medical_tests" name="2_Pass_SSB_Interview_medical_tests">
                        <label for="2_Pass_SSB_Interview_medical_tests">2) Pass SSB Interview & medical tests</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Train_at_Indian_Naval_Academy_INA" name="3_Train_at_Indian_Naval_Academy_INA">
                        <label for="3_Train_at_Indian_Naval_Academy_INA">3) Train at Indian Naval Academy (INA)</label>
                    </div>
                </div>',
    'resources' => 'Books: Indian Navy Entrance Guide. Websites: joinindiannavy.gov.in.',
    'jobRoles' => 'Sub-Lieutenant, Lieutenant, Commander, Admiral.',
    'salary' => '₹8 lakh - ₹35 lakh per year.',
    'futureScope' => 'Cyber warfare, marine engineering, strategic defense.',
    'successStory' => 'Success Story: Admiral Karambir Singh (Ex-Chief of Naval Staff).',
    'youtube' => 'https://www.youtube.com/embed/XtjJsLEeaSg'
],
'Indian Air Force Officer' => [
    'overview' => 'Air Force Officers control aerial defense, fighter jets, and surveillance missions.',
    'skills' => 'Aeronautical knowledge, strategy, reflexes, teamwork.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Clear_NDA_CDS_AFCAT_exam" name="1_Clear_NDA_CDS_AFCAT_exam">
                        <label for="1_Clear_NDA_CDS_AFCAT_exam">1) Clear NDA/CDS/AFCAT exam</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Pass_SSB_Interview_medical_tests" name="2_Pass_SSB_Interview_medical_tests">
                        <label for="2_Pass_SSB_Interview_medical_tests">2) Pass SSB Interview & medical tests</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Train_at_Air_Force_Academy_AFA" name="3_Train_at_Air_Force_Academy_AFA">
                        <label for="3_Train_at_Air_Force_Academy_AFA">3) Train at Air Force Academy (AFA)</label>
                    </div>
                </div>',
    'resources' => 'Books: AFCAT Guide by R.S. Aggarwal. Websites: careerindianairforce.cdac.in.',
    'jobRoles' => 'Flying Officer, Squadron Leader, Air Marshal.',
    'salary' => '₹10 lakh - ₹40 lakh per year.',
    'futureScope' => 'UAV technology, space defense, cyber security.',
    'successStory' => 'Success Story: Air Chief Marshal Rakesh Kumar Singh Bhadauria.',
    'youtube' => 'https://www.youtube.com/embed/QeNA2P8ZwWo'
],
'Public Policy Analyst' => [
    'overview' => 'Public Policy Analysts evaluate and develop government policies to address social issues.',
    'skills' => 'Policy research, economics, statistics, governance.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_degree_in_Public_Policy_Economics_or_Political_Science" name="1_Earn_a_degree_in_Public_Policy_Economics_or_Political_Science">
                        <label for="1_Earn_a_degree_in_Public_Policy_Economics_or_Political_Science">1) Earn a degree in Public Policy, Economics, or Political Science</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_experience_in_policy_research_government_roles_or_think_tanks" name="2_Gain_experience_in_policy_research_government_roles_or_think_tanks">
                        <label for="2_Gain_experience_in_policy_research_government_roles_or_think_tanks">2) Gain experience in policy research, government roles, or think tanks</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Learn_data_analytics_and_impact_assessment_techniques" name="3_Learn_data_analytics_and_impact_assessment_techniques">
                        <label for="3_Learn_data_analytics_and_impact_assessment_techniques">3) Learn data analytics and impact assessment techniques</label>
                    </div>
                </div>',
    'resources' => 'Books: The Public Policy Theory Primer by Kevin Smith. Websites: PRS India, NITI Aayog.',
    'jobRoles' => 'Policy Analyst, Government Consultant, Economic Advisor.',
    'salary' => '₹6 lakh - ₹20 lakh per year.',
    'futureScope' => 'AI in policymaking, sustainable development, international relations.',
    'successStory' => 'Success Story: Raghuram Rajan (Ex-RBI Governor, Public Policy Expert).',
    'youtube' => 'https://www.youtube.com/embed/CvII_M8aTrsx'
],
'Physicist' => [
    'overview' => 'Physicists study matter, energy, and the universe fundamental laws.',
    'skills' => 'Mathematics, quantum mechanics, research, problem-solving.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Earn_a_degree_in_Physics" name="1_Earn_a_degree_in_Physics">
                        <label for="1_Earn_a_degree_in_Physics">1) Earn a degree in Physics</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Specialize_in_a_field_like_quantum_physics" name="2_Specialize_in_a_field_like_quantum_physics">
                        <label for="2_Specialize_in_a_field_like_quantum_physics">2) Specialize in a field like quantum physics</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Gain_research_experience_pursue_a_PhD" name="3_Gain_research_experience_pursue_a_PhD">
                        <label for="3_Gain_research_experience_pursue_a_PhD">3) Gain research experience & pursue a Ph.D.</label>
                    </div>
                </div>',
    'resources' => 'Books: A Brief History of Time by Stephen Hawking | Websites: MIT OpenCourseWare, Physics.org.',
    'jobRoles' => 'Research Scientist, Theoretical Physicist, Data Analyst.',
    'salary' => '₹6 lakh - ₹30 lakh per year.',
    'futureScope' => 'Quantum computing, astrophysics, AI-driven simulations.',
    'successStory' => 'Success Story: Albert Einstein, C.V. Raman.',
    'youtube' => 'https://www.youtube.com/embed/He0EyxmfE9g',
],
'Chemist' => [
    'overview' => 'Chemists analyze substances to develop new materials and medicines.',
    'skills' => 'Organic chemistry, analytical techniques, lab skills.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Get_a_Chemistry_degree" name="1_Get_a_Chemistry_degree">
                        <label for="1_Get_a_Chemistry_degree">1) Get a Chemistry degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Gain_lab_experience" name="2_Gain_lab_experience">
                        <label for="2_Gain_lab_experience">2) Gain lab experience</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Specialize_in_areas_like_pharmaceuticals_or_industrial_chemistry" name="3_Specialize_in_areas_like_pharmaceuticals_or_industrial_chemistry">
                        <label for="3_Specialize_in_areas_like_pharmaceuticals_or_industrial_chemistry">3) Specialize in areas like pharmaceuticals or industrial chemistry</label>
                    </div>
                </div>',
    'resources' => 'Books: The Disappearing Spoon by Sam Kean | Websites: ACS, Chemguide.',
    'jobRoles' => 'Analytical Chemist, Pharmacologist, Toxicologist.',
    'salary' => '₹4 lakh - ₹20 lakh per year.',
    'futureScope' => 'Green chemistry, AI-driven drug discovery, nanotechnology.',
    'successStory' => 'Success Story: Marie Curie, Venkatraman Ramakrishnan.',
    'youtube' => 'https://www.youtube.com/embed/Wx0UEQfAiE4'
],
'Environmental Scientist' => [
    'overview' => 'Environmental Scientists study the environment to solve pollution and conservation issues.',
    'skills' => 'Data analysis, fieldwork, sustainability knowledge.',
    'roadmap' => '<div class="roadmap-grid">
                    <div class="roadmap-item">
                        <input type="checkbox" id="1_Get_an_Environmental_Science_degree" name="1_Get_an_Environmental_Science_degree">
                        <label for="1_Get_an_Environmental_Science_degree">1) Get an Environmental Science degree</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="2_Work_on_research_field_projects" name="2_Work_on_research_field_projects">
                        <label for="2_Work_on_research_field_projects">2) Work on research & field projects</label>
                    </div>
                    <div class="roadmap-item">
                        <input type="checkbox" id="3_Specialize_in_pollution_control_or_sustainability" name="3_Specialize_in_pollution_control_or_sustainability">
                        <label for="3_Specialize_in_pollution_control_or_sustainability">3) Specialize in pollution control or sustainability</label>
                    </div>
                </div>',
    'resources' => 'Books: Silent Spring by Rachel Carson | Websites: UNEP, NCEAS.',
    'jobRoles' => 'Ecologist, Climate Change Analyst, Conservation Scientist.',
    'salary' => '₹4 lakh - ₹15 lakh per year.',
    'futureScope' => 'Renewable energy, climate modeling, AI-based sustainability.',
    'successStory' => 'Success Story: Sundarlal Bahuguna (Chipko Movement).',
    'youtube' => 'https://www.youtube.com/embed/OKxzx_q4yCM'
],

   'Forensic Scientist' => [
    'overview' => 'Forensic Scientists analyze evidence in criminal investigations.',
    'skills' => 'Criminal law, DNA analysis, lab techniques.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Study Forensic Science</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Gain experience in crime labs</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Specialize in toxicology, ballistics, or DNA forensics</div>
    </div>',
    'resources' => 'Books: Forensics: The Anatomy of Crime by Val McDermid | Websites: FBI Forensics, NIST.',
    'jobRoles' => 'Crime Scene Investigator, Forensic Toxicologist, DNA Analyst.',
    'salary' => '₹5 lakh - ₹18 lakh per year.',
    'futureScope' => 'AI-driven forensics, cyber forensics, DNA profiling advancements.',
    'successStory' => 'Success Story: Dr. Edmond Locard (Founder of modern forensics).',
    'youtube' => 'https://www.youtube.com/embed/6JnP-wYghGs'
],
'Astronomer' => [
    'overview' => 'Astronomers study celestial bodies and space phenomena.',
    'skills' => 'Astrophysics, telescopic observation, coding (Python, MATLAB).',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Earn a Physics/Astronomy degree</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Work in observatories & research</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Pursue a Ph.D. in Astrophysics</div>
    </div>',
    'resources' => 'Books: Cosmos by Carl Sagan | Websites: NASA, ISRO, Space.com.',
    'jobRoles' => 'Astrophysicist, Space Scientist, Researcher.',
    'salary' => '₹7 lakh - ₹35 lakh per year.',
    'futureScope' => 'AI in space research, interplanetary exploration, exoplanet studies.',
    'successStory' => 'Success Story: Stephen Hawking, Aryabhata.',
    'youtube' => 'https://www.youtube.com/embed/hcdTgcaLNLw'
],
'Mathematician' => [
    'overview' => 'Mathematicians develop theories and solve problems in finance, cryptography, and AI.',
    'skills' => 'Algebra, calculus, logical reasoning, statistics.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Study Mathematics</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Specialize in fields like cryptography or applied math</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Work in research or industry</div>
    </div>',
    'resources' => 'Books: The Joy of x by Steven Strogatz | Websites: Khan Academy, Wolfram Alpha.',
    'jobRoles' => 'Data Scientist, Cryptographer, Quantitative Analyst.',
    'salary' => '₹6 lakh - ₹25 lakh per year.',
    'futureScope' => 'AI-driven mathematics, quantum computing, financial modeling.',
    'successStory' => 'Success Story: Srinivasa Ramanujan, John Nash.',
    'youtube' => 'https://www.youtube.com/embed/pByDJDUEbUA'
],
'Microbiologist' => [
    'overview' => 'Microbiologists study microscopic organisms to develop medicines, vaccines, and biotech solutions.',
    'skills' => 'Lab techniques, microscopy, genetics, bioinformatics.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Get a Microbiology degree</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Work in research labs or healthcare</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Specialize in virology, immunology, or biotech</div>
    </div>',
    'resources' => 'Books: Microbiology: An Introduction by Tortora | Websites: ASM, NCBI.',
    'jobRoles' => 'Virologist, Medical Microbiologist, Biotech Scientist.',
    'salary' => '₹4 lakh - ₹20 lakh per year.',
    'futureScope' => 'AI in microbiology, synthetic biology, vaccine research.',
    'successStory' => 'Success Story: Louis Pasteur, Kary Mullis.',
    'youtube' => 'https://www.youtube.com/embed/FaH6hL_GxwI&t=7s'
],
'Genetic Engineer' => [
    'overview' => 'Genetic Engineers modify genes to develop new medicines, crops, and treatments.',
    'skills' => 'CRISPR, molecular biology, bioinformatics, cloning.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Study Biotechnology/Genetics</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Work in biotech research</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Specialize in gene therapy or agricultural genetics</div>
    </div>',
    'resources' => 'Books: Genome by Matt Ridley | Websites: Genomics England, NCBI.',
    'jobRoles' => 'Biomedical Engineer, Genetic Counselor, Biotech Researcher.',
    'salary' => '₹6 lakh - ₹30 lakh per year.',
    'futureScope' => 'AI in genetics, personalized medicine, biohacking.',
    'successStory' => 'Success Story: Jennifer Doudna (CRISPR Pioneer).',
    'youtube' => 'https://www.youtube.com/embed/CDw4WPng2iE'
],
'Air Hostess / Cabin Crew' => [
    'overview' => 'Cabin crew ensures passenger safety and provides hospitality services during flights.',
    'skills' => 'Communication, customer service, first aid, grooming.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Complete 12th grade</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Enroll in a cabin crew course</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Apply for airlines & clear interviews</div>
    </div>',
    'resources' => 'Books: The Complete Cabin Crew Interview Guide | Websites: IATA, DGCA India.',
    'jobRoles' => 'Air Hostess, Flight Attendant, Ground Staff.',
    'salary' => '₹5 lakh - ₹12 lakh per year.',
    'futureScope' => 'Luxury airlines, international aviation, in-flight management.',
    'successStory' => 'Success Story: Neerja Bhanot (Air India Hero).',
    'youtube' => 'https://www.youtube.com/embed/fQsAXbbVYSY'
],
'Travel Blogger' => [
    'overview' => 'Travel bloggers explore destinations, share experiences, and earn through content creation.',
    'skills' => 'Photography, storytelling, social media marketing, videography.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Travel and document experiences</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Build a blog & social media presence</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Monetize via brand deals, YouTube, or sponsorships</div>
    </div>',
    'resources' => 'Books: The Complete Cabin Crew Interview Guide | Websites: IATA, DGCA India.',
    'jobRoles' => 'Travel Blogger, Content Creator, Travel Influencer.',
    'salary' => '₹3 lakh - ₹20 lakh per year (varies based on audience).',
    'futureScope' => 'Sponsored content, destination marketing, travel vlogging.',
    'successStory' => 'Success Story: Varun Vagish (Mountain Trekker), Savi & Vid (Bruised Passports).',
    'youtube' => 'https://www.youtube.com/embed/QNtYsObM4Fg',
],
'Hotel Manager' => [
    'overview' => 'Hotel managers oversee hotel operations, ensuring customer satisfaction and efficient management.',
    'skills' => 'Hospitality, business management, communication, finance.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Earn a degree in Hotel Management</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Gain experience in hospitality</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Move up to management roles</div>
    </div>',
    'resources' => 'Books: Setting the Table by Danny Meyer | Websites: Hotelier India, IHCL.',
    'jobRoles' => 'General Manager, Front Office Manager, Resort Manager.',
    'salary' => '₹6 lakh - ₹25 lakh per year.',
    'futureScope' => 'Luxury hospitality, AI in hotel management, boutique hotels.',
    'successStory' => 'Success Story: Ritesh Agarwal (OYO Founder), Priya Paul (The Park Hotels).',
    'youtube' => 'https://www.youtube.com/embed/jyWwVbz4sPE',
],
'Tour Guide' => [
    'overview' => 'Tour guides lead travelers and provide insights into historical, cultural, or adventure destinations.',
    'skills' => 'Communication, history knowledge, storytelling, language proficiency.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Study Tourism & Travel Management</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Get licensed (if needed)</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Work with agencies or freelance</div>
    </div>',
    'resources' => 'Books: The Tour Guide Handbook | Websites: Incredible India, TripAdvisor.',
    'jobRoles' => 'Heritage Guide, Adventure Guide, Wildlife Guide.',
    'salary' => '₹3 lakh - ₹10 lakh per year.',
    'futureScope' => 'Virtual tourism, AI-powered guided tours, luxury travel.',
    'successStory' => 'Success Story: Thomas Cook Tour Guides, Local Airbnb Experiences.',
    'youtube' => 'https://www.youtube.com/embed/tDjtQsBdn_U',
],
'Fitness Trainer' => [
    'overview' => 'Fitness trainers help individuals achieve health and fitness goals through exercise and diet plans.',
    'skills' => 'Anatomy, nutrition, personal training, motivation.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Get a fitness certification (ACE, ISSA)</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Gain experience in gyms or as a personal trainer</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Build a client base or start online coaching</div>
    </div>',
    'resources' => 'Books: Strength Training Anatomy by Frédéric Delavier | Websites: ACE Fitness, ISSA',
    'jobRoles' => 'Gym Trainer, Strength Coach, Personal Trainer.',
    'salary' => '₹4 lakh - ₹15 lakh per year.',
    'futureScope' => 'Online coaching, celebrity fitness training, AI-driven workout plans.',
    'successStory' => 'Success Story: Yasmin Karachiwala (Celebrity Trainer).',
    'youtube' => 'https://www.youtube.com/embed/EjoldS6as0A',
],
'Yoga Instructor' => [
    'overview' => 'Yoga instructors guide students in yoga practices for physical and mental wellness.',
    'skills' => 'Yoga techniques, meditation, anatomy, communication.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Get certified in Yoga (RYT 200/500)</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Gain teaching experience</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Build a studio or start online classes</div>
    </div>',
    'resources' => 'Books: The Heart of Yoga by T.K.V. Desikachar | Websites: Yoga Journal, Art of Living.',
    'jobRoles' => 'Yoga Teacher, Meditation Coach, Ayurveda Wellness Consultant.',
    'salary' => '₹3 lakh - ₹12 lakh per year.',
    'futureScope' => 'Online yoga, wellness retreats, corporate yoga training.',
    'successStory' => 'Success Story: Baba Ramdev, Deepika Mehta.',
    'youtube' => 'https://www.youtube.com/embed/v8ElhXKHXVw',
],
'E-Sports Player' => [
    'overview' => 'E-sports players compete in gaming tournaments and earn through sponsorships and streaming.',
    'skills' => 'Reflexes, strategy, team coordination, gaming expertise.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Master a competitive game</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Join e-sports teams or participate in tournaments</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Stream & monetize gaming</div>
    </div>',
    'resources' => 'Books: Esports Marketing by Tobias Scholz | Websites: ESL Gaming, Twitch.',
    'jobRoles' => 'Professional Gamer, Streamer, Game Analyst.',
    'salary' => '₹6 lakh - ₹50 lakh per year (prize money + sponsorships).',
    'futureScope' => 'VR gaming, AI-driven coaching, global e-sports leagues.',
    'successStory' => 'Success Story: Mortal (Naman Mathur), ScoutOP (Tanmay Singh).',
    'youtube' => 'https://www.youtube.com/embed/hcdAZQ5Tth8',
],
'Influencer / YouTuber' => [
    'overview' => 'Influencers and YouTubers create content in various niches to engage audiences and monetize.',
    'skills' => 'Content creation, video editing, marketing, branding.',
    'roadmap' => '<div class="roadmap-grid">
        <div class="roadmap-item"><input type="checkbox"> 1) Choose a niche</div>
        <div class="roadmap-item"><input type="checkbox"> 2) Create quality content consistently</div>
        <div class="roadmap-item"><input type="checkbox"> 3) Monetize via ads, sponsorships, and memberships</div>
    </div>',
    'resources' => 'Books: YouTube Secrets by Sean Cannell | Websites: YouTube Creator Academy, Social Blade.',
    'jobRoles' => 'YouTuber, Social Media Influencer, Digital Marketer.',
    'salary' => '₹3 lakh - ₹1 crore+ per year (depends on followers & sponsorships).',
    'futureScope' => 'AI-generated content, metaverse influencers, virtual reality experiences.',
    'successStory' => 'Success Story: CarryMinati, Bhuvan Bam, Technical Guruji.',
    'youtube' => 'https://www.youtube.com/embed/AFpIixxSFjo',
]

];


if (!array_key_exists($sub, $details)) {
    echo "<p>Details for this career are not available yet.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($sub) ?> - Career Options</title>
    <link rel="stylesheet" href="./assets/style.css">
    <style>
        .profile-progress {
            margin: 20px 0;
            text-align: center;
        }
        .progress-bar-container {
            width: 100%;
            height: 20px;
            background-color: #f3f3f3;
            border-radius: 10px;
            overflow: hidden;
        }
        .progress-bar {
            height: 100%;
            background-color: #4caf50;
            transition: width 0.3s ease;
        }
        #progress-text {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($sub) ?></h1>
    </header>
    <main class="details-container">
        <!-- Progress Bar -->
        <div class="profile-progress">
            <h2>Your Progress</h2>
            <div class="progress-bar-container">
                <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>
            </div>
            <p id="progress-text">0% Complete</p>
        </div>

        <!-- Existing Sections -->
        <section>
            <h2>💡 Overview</h2>
            <p><?= htmlspecialchars($details[$sub]['overview']) ?></p>
        </section>

        <section>
            <h2>🛠️ Skills Required</h2>
            <p><?= htmlspecialchars($details[$sub]['skills']) ?></p>
        </section>

        <section>
            <h2>🗺️ Career Roadmap</h2>
            <?= $details[$sub]['roadmap'] ?>
        </section>

        <section>
            <h2>📚 Learning Resources</h2>
            <?= $details[$sub]['resources'] ?>
        </section>

        <section>
            <h2>👔 Job Roles</h2>
            <p><?= htmlspecialchars($details[$sub]['jobRoles']) ?></p>
        </section>

        <section>
            <h2>💰 Salary</h2>
            <p><?= htmlspecialchars($details[$sub]['salary']) ?></p>
        </section>

        <section>
            <h2>🔮 Future Scope</h2>
            <p><?= htmlspecialchars($details[$sub]['futureScope']) ?></p>
        </section>

        <section>
            <h2>🏆 Success Story</h2>
            <p><?= htmlspecialchars($details[$sub]['successStory']) ?></p>
        </section>

        <section class="video-container">
            <h2>🎬 Career Insights Video</h2>
            <div class="responsive-video">
                <iframe width="560" height="315" src="<?= $details[$sub]['youtube'] ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>

        <!-- Add the "Government Scholarships/Schemes" button for ALL careers -->
        <section>
            <h2>🎓 Government Scholarships/Schemes</h2>
            <p>Explore government scholarships and schemes available for <?= htmlspecialchars($sub) ?>.</p>
            <a href="schemes.php?career=<?= urlencode($sub) ?>" class="schemes-button">Government Scholarships/Schemes</a>
        </section>

        <!-- JavaScript for Progress Tracking -->
        <script>
            // Function to save checkbox state
            function saveCheckboxState(checkbox) {
                const roadmapItem = checkbox.closest('.roadmap-item');
                const itemId = roadmapItem.querySelector('input[type="checkbox"]').id;
                localStorage.setItem(itemId, checkbox.checked);
            }

            // Function to load checkbox state
            function loadCheckboxState() {
                const checkboxes = document.querySelectorAll('.roadmap-item input[type="checkbox"]');
                checkboxes.forEach(checkbox => {
                    const itemId = checkbox.id;
                    const isChecked = localStorage.getItem(itemId) === 'true';
                    checkbox.checked = isChecked;
                });
            }

            // Function to calculate progress
            function calculateProgress() {
                const checkboxes = document.querySelectorAll('.roadmap-item input[type="checkbox"]');
                const totalCheckboxes = checkboxes.length;
                const checkedCheckboxes = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
                const progress = (checkedCheckboxes / totalCheckboxes) * 100;
                return progress.toFixed(2); // Return progress with 2 decimal places
            }

            // Function to update progress on the profile
            function updateProgress() {
                const progress = calculateProgress();
                document.getElementById('progress-bar').style.width = `${progress}%`;
                document.getElementById('progress-text').innerText = `${progress}% Complete`;
            }

            // Event listener for checkbox changes
            document.querySelectorAll('.roadmap-item input[type="checkbox"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    saveCheckboxState(this);
                    updateProgress();
                });
            });

            // Load checkbox states when the page loads
            window.addEventListener('load', function() {
                loadCheckboxState();
                updateProgress();
            });
        
</script>
    </main>
</body>
</html>
    