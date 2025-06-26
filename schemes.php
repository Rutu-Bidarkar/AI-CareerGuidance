<?php
$career = $_GET['career'] ?? 'Software Engineer';

// Sample data for government scholarships/schemes
$schemes = [
    'Software Engineer' => [
        [
            'name' => 'National Scholarship Portal',
            'description' => 'Scholarships for students pursuing engineering and technology courses.',
            'link' => 'https://scholarships.gov.in/'
        ],
        [
            'name' => 'AICTE Scholarships',
            'description' => 'Scholarships for students enrolled in AICTE-approved institutions.',
            'link' => 'https://www.aicte-india.org/schemes/students-development-schemes'
        ],
        [
            'name' => 'Pragati Scholarship for Girls',
            'description' => 'Scholarships for girl students pursuing technical education.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ]
    ],
    'Data Scientist' => [
        [
            'name' => 'National Data Science Scholarship',
            'description' => 'Scholarships for students pursuing data science and analytics courses.',
            'link' => 'https://www.analyticsvidhya.com/scholarship/'
        ],
        [
            'name' => 'AICTE PG Scholarships',
            'description' => 'Scholarships for postgraduate students in data science and related fields.',
            'link' => 'https://www.aicte-india.org/schemes/pg-scholarship'
        ],
        [
            'name' => 'Google AI Residency Program',
            'description' => 'Program for aspiring data scientists and AI researchers.',
            'link' => 'https://ai.google/research/join-us/ai-residency/'
        ]
    ],
    'AI Engineer' => [
        [
            'name' => 'National AI Scholarship Program',
            'description' => 'Scholarships for students pursuing AI and machine learning courses.',
            'link' => 'https://www.nasscom.in/ai-scholarship'
        ],
        [
            'name' => 'Microsoft AI for Good',
            'description' => 'Grants and scholarships for AI engineers working on social impact projects.',
            'link' => 'https://www.microsoft.com/en-us/ai/ai-for-good'
        ],
        [
            'name' => 'IBM AI Horizons Network',
            'description' => 'Scholarships and research opportunities for AI engineers.',
            'link' => 'https://www.ibm.com/thought-leadership/ai-horizons-network/'
        ]
    ],
    'Mechanical Engineer' => [
        [
            'name' => 'National Mechanical Engineering Scholarship',
            'description' => 'Scholarships for students pursuing mechanical engineering courses.',
            'link' => 'https://www.imeche.org/careers-education/scholarships-and-awards'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in mechanical engineering.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'SAE International Scholarships',
            'description' => 'Scholarships for mechanical engineering students specializing in automotive engineering.',
            'link' => 'https://www.sae.org/participate/scholarships'
        ]
    ],
    'Civil Engineer' => [
        [
            'name' => 'National Civil Engineering Scholarship',
            'description' => 'Scholarships for students pursuing civil engineering courses.',
            'link' => 'https://www.ice.org.uk/careers-and-training/scholarships'
        ],
        [
            'name' => 'AICTE Saksham Scholarship',
            'description' => 'Scholarships for differently-abled students in civil engineering.',
            'link' => 'https://www.aicte-india.org/schemes/saksham-scholarship'
        ],
        [
            'name' => 'ASCE Scholarships',
            'description' => 'Scholarships for civil engineering students from the American Society of Civil Engineers.',
            'link' => 'https://www.asce.org/career-growth/scholarships-and-fellowships/'
        ]
    ],
    'Electrical Engineer' => [
        [
            'name' => 'National Electrical Engineering Scholarship',
            'description' => 'Scholarships for students pursuing electrical engineering courses.',
            'link' => 'https://www.ieee.org/scholarships'
        ],
        [
            'name' => 'AICTE PG Scholarships',
            'description' => 'Scholarships for postgraduate students in electrical engineering.',
            'link' => 'https://www.aicte-india.org/schemes/pg-scholarship'
        ],
        [
            'name' => 'Siemens STEM Program',
            'description' => 'Scholarships for electrical engineering students focusing on innovation.',
            'link' => 'https://new.siemens.com/global/en/company/jobs/students/scholarships.html'
        ]
    ],
    'Robotics Engineer' => [
        [
            'name' => 'National Robotics Scholarship',
            'description' => 'Scholarships for students pursuing robotics and automation courses.',
            'link' => 'https://www.robotics.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in robotics engineering.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'FIRST Robotics Competition Grants',
            'description' => 'Grants for students participating in robotics competitions.',
            'link' => 'https://www.firstinspires.org/robotics/frc'
        ]
    ],
    'Aerospace Engineer' => [
        [
            'name' => 'National Aerospace Scholarship',
            'description' => 'Scholarships for students pursuing aerospace engineering courses.',
            'link' => 'https://www.aiaa.org/get-involved/students-educators/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in aerospace engineering.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'NASA Internships and Scholarships',
            'description' => 'Opportunities for aerospace engineering students to work with NASA.',
            'link' => 'https://www.nasa.gov/stem/nextgenstem/projects.html'
        ]
    ],
    'Game Developer' => [
        [
            'name' => 'National Game Development Scholarship',
            'description' => 'Scholarships for students pursuing game development courses.',
            'link' => 'https://www.igda.org/scholarships'
        ],
        [
            'name' => 'Unity Scholar Program',
            'description' => 'Scholarships for students learning game development with Unity.',
            'link' => 'https://unity.com/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in game development.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ]
    ],
    'Cybersecurity Analyst' => [
        [
            'name' => 'National Cybersecurity Scholarship Program',
            'description' => 'Scholarships for students pursuing cybersecurity courses.',
            'link' => 'https://www.sans.org/cybersecurity-scholarships'
        ],
        [
            'name' => 'AICTE PG Scholarships',
            'description' => 'Scholarships for postgraduate students in cybersecurity.',
            'link' => 'https://www.aicte-india.org/schemes/pg-scholarship'
        ],
        [
            'name' => 'ISC² Cybersecurity Scholarships',
            'description' => 'Scholarships for aspiring cybersecurity professionals.',
            'link' => 'https://www.isc2.org/cybersecurity-scholarships'
        ]
    ],
    'Fashion Designer' => [
        [
            'name' => 'National Institute of Fashion Technology (NIFT) Scholarships',
            'description' => 'Scholarships for students pursuing fashion design courses.',
            'link' => 'https://www.nift.ac.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in fashion design.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'CFDA Scholarships',
            'description' => 'Scholarships for fashion design students from the Council of Fashion Designers of America.',
            'link' => 'https://cfda.com/scholarships'
        ]
    ],
    'Interior Designer' => [
        [
            'name' => 'National Interior Design Scholarship',
            'description' => 'Scholarships for students pursuing interior design courses.',
            'link' => 'https://www.asid.org/foundation/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in interior design.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'IIDA Scholarships',
            'description' => 'Scholarships for interior design students from the International Interior Design Association.',
            'link' => 'https://www.iida.org/content.cfm/scholarships'
        ]
    ],
    'UI/UX Designer' => [
        [
            'name' => 'National UI/UX Design Scholarship',
            'description' => 'Scholarships for students pursuing UI/UX design courses.',
            'link' => 'https://www.interaction-design.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in UI/UX design.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Adobe Design Achievement Awards',
            'description' => 'Scholarships and awards for UI/UX design students.',
            'link' => 'https://www.adobe.com/education/adaa.html'
        ]
    ],
    'Product Designer' => [
        [
            'name' => 'National Product Design Scholarship',
            'description' => 'Scholarships for students pursuing product design courses.',
            'link' => 'https://www.idsa.org/awards-scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in product design.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Industrial Designers Society of America (IDSA) Scholarships',
            'description' => 'Scholarships for aspiring product designers.',
            'link' => 'https://www.idsa.org/awards-scholarships'
        ]
    ],
    'Animation & VFX Artist' => [
        [
            'name' => 'National Animation Scholarship',
            'description' => 'Scholarships for students pursuing animation and VFX courses.',
            'link' => 'https://www.animationcareerreview.com/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in animation and VFX.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Autodesk Animation Scholarships',
            'description' => 'Scholarships for students using Autodesk software in animation.',
            'link' => 'https://www.autodesk.com/education/student-scholarships'
        ]
    ],
    'SEO Specialist' => [
        [
            'name' => 'National Digital Marketing Scholarship',
            'description' => 'Scholarships for students pursuing SEO and digital marketing courses.',
            'link' => 'https://www.digitalmarketinginstitute.com/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in SEO and digital marketing.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Google Digital Garage Scholarships',
            'description' => 'Scholarships for students learning SEO and digital marketing through Google.',
            'link' => 'https://learndigital.withgoogle.com/digitalgarage'
        ]
    ],
    'Digital Marketer' => [
        [
            'name' => 'National Digital Marketing Scholarship',
            'description' => 'Scholarships for students pursuing digital marketing courses.',
            'link' => 'https://www.digitalmarketinginstitute.com/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in digital marketing.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'HubSpot Academy Scholarships',
            'description' => 'Scholarships for students learning digital marketing through HubSpot.',
            'link' => 'https://academy.hubspot.com/scholarships'
        ]
    ],
    'Journalist' => [
        [
            'name' => 'National Journalism Scholarship',
            'description' => 'Scholarships for students pursuing journalism courses.',
            'link' => 'https://www.spj.org/scholarships.asp'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in journalism.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Poynter Institute Scholarships',
            'description' => 'Scholarships for aspiring journalists.',
            'link' => 'https://www.poynter.org/scholarships/'
        ]
    ],
    'News Anchor' => [
        [
            'name' => 'National Broadcast Journalism Scholarship',
            'description' => 'Scholarships for students pursuing broadcast journalism and news anchoring courses.',
            'link' => 'https://www.rtdna.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in broadcast journalism.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'RTDNA Scholarships',
            'description' => 'Scholarships for aspiring news anchors and broadcast journalists.',
            'link' => 'https://www.rtdna.org/scholarships'
        ]
    ],
    'Content Strategist' => [
        [
            'name' => 'National Content Strategy Scholarship',
            'description' => 'Scholarships for students pursuing content strategy and marketing courses.',
            'link' => 'https://www.contentmarketinginstitute.com/scholarships/'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in content strategy.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'HubSpot Content Marketing Scholarships',
            'description' => 'Scholarships for students learning content strategy through HubSpot.',
            'link' => 'https://academy.hubspot.com/scholarships'
        ]
    ],
    'Social Media Manager' => [
        [
            'name' => 'National Social Media Scholarship',
            'description' => 'Scholarships for students pursuing social media management courses.',
            'link' => 'https://www.socialmediaexaminer.com/scholarships/'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in social media management.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Hootsuite Social Media Scholarships',
            'description' => 'Scholarships for students learning social media management through Hootsuite.',
            'link' => 'https://education.hootsuite.com/scholarships/'
        ]
    ],
    'Film Director' => [
        [
            'name' => 'National Film Scholarship',
            'description' => 'Scholarships for students pursuing film direction and production courses.',
            'link' => 'https://www.filminstitute.com/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in film direction.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Sundance Institute Scholarships',
            'description' => 'Scholarships for aspiring film directors.',
            'link' => 'https://www.sundance.org/programs/scholarships'
        ]
    ],
    'Graphic Designer' => [
        [
            'name' => 'National Graphic Design Scholarship',
            'description' => 'Scholarships for students pursuing graphic design courses.',
            'link' => 'https://www.aiga.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in graphic design.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Adobe Design Achievement Awards',
            'description' => 'Scholarships for graphic design students.',
            'link' => 'https://www.adobe.com/education/adaa.html'
        ]
    ],
    'Public Relations (PR) Specialist' => [
        [
            'name' => 'National PR Scholarship',
            'description' => 'Scholarships for students pursuing public relations courses.',
            'link' => 'https://www.prsa.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in public relations.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'PRSSA Scholarships',
            'description' => 'Scholarships for aspiring PR specialists.',
            'link' => 'https://www.prssa.org/scholarships/'
        ]
    ],
    'Photographer' => [
        [
            'name' => 'National Photography Scholarship',
            'description' => 'Scholarships for students pursuing photography courses.',
            'link' => 'https://www.photography.com/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in photography.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Sony World Photography Awards',
            'description' => 'Scholarships and awards for aspiring photographers.',
            'link' => 'https://www.worldphoto.org/sony-world-photography-awards'
        ]
    ],
    'Doctor' => [
        [
            'name' => 'National Medical Commission (NMC) Scholarships',
            'description' => 'Scholarships for medical students.',
            'link' => 'https://www.nmc.org.in/'
        ],
        [
            'name' => 'Central Sector Scheme of Scholarships for College and University Students',
            'description' => 'Scholarships for meritorious students pursuing medical courses.',
            'link' => 'https://scholarships.gov.in/'
        ]
    ],
    'Physiotherapist' => [
        [
            'name' => 'National Physiotherapy Scholarship',
            'description' => 'Scholarships for students pursuing physiotherapy courses.',
            'link' => 'https://www.physiotherapyindia.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in physiotherapy.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'World Physiotherapy Scholarships',
            'description' => 'Scholarships for aspiring physiotherapists.',
            'link' => 'https://world.physio/scholarships'
        ]
    ],
    'Pharmacist' => [
        [
            'name' => 'National Pharmacy Scholarship',
            'description' => 'Scholarships for students pursuing pharmacy courses.',
            'link' => 'https://www.pharmacy.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in pharmacy.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Indian Pharmaceutical Association Scholarships',
            'description' => 'Scholarships for pharmacy students in India.',
            'link' => 'https://www.ipapharma.org/scholarships'
        ]
    ],
    'Nutritionist/Dietitian' => [
        [
            'name' => 'National Nutrition Scholarship',
            'description' => 'Scholarships for students pursuing nutrition and dietetics courses.',
            'link' => 'https://www.nutrition.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in nutrition and dietetics.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Academy of Nutrition and Dietetics Scholarships',
            'description' => 'Scholarships for aspiring nutritionists and dietitians.',
            'link' => 'https://www.eatrightpro.org/scholarships'
        ]
    ],
    'Biotechnologist' => [
        [
            'name' => 'National Biotechnology Scholarship',
            'description' => 'Scholarships for students pursuing biotechnology courses.',
            'link' => 'https://www.biotech.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in biotechnology.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Biotechnology Industry Organization (BIO) Scholarships',
            'description' => 'Scholarships for aspiring biotechnologists.',
            'link' => 'https://www.bio.org/scholarships'
        ]
    ],
    'Veterinary Doctor' => [
        [
            'name' => 'National Veterinary Scholarship',
            'description' => 'Scholarships for students pursuing veterinary medicine courses.',
            'link' => 'https://www.avma.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in veterinary medicine.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Indian Veterinary Research Institute (IVRI) Scholarships',
            'description' => 'Scholarships for veterinary students in India.',
            'link' => 'https://www.ivri.nic.in/scholarships'
        ]
    ],
    'Chartered Accountant (CA)' => [
        [
            'name' => 'National CA Scholarship',
            'description' => 'Scholarships for students pursuing chartered accountancy courses.',
            'link' => 'https://www.icai.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in chartered accountancy.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Institute of Chartered Accountants of India (ICAI) Scholarships',
            'description' => 'Scholarships for aspiring CAs in India.',
            'link' => 'https://www.icai.org/scholarships'
        ]
    ],
    'Investment Banker' => [
        [
            'name' => 'National Investment Banking Scholarship',
            'description' => 'Scholarships for students pursuing investment banking courses.',
            'link' => 'https://www.iibf.org.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in investment banking.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'CFA Institute Scholarships',
            'description' => 'Scholarships for aspiring investment bankers.',
            'link' => 'https://www.cfainstitute.org/scholarships'
        ]
    ],
    'Financial Analyst' => [
        [
            'name' => 'National Financial Analysis Scholarship',
            'description' => 'Scholarships for students pursuing financial analysis courses.',
            'link' => 'https://www.financialanalyst.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in financial analysis.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'CFA Institute Scholarships',
            'description' => 'Scholarships for aspiring financial analysts.',
            'link' => 'https://www.cfainstitute.org/scholarships'
        ]
    ],
    'Business Manager' => [
        [
            'name' => 'National Business Management Scholarship',
            'description' => 'Scholarships for students pursuing business management courses.',
            'link' => 'https://www.aicte-india.org/schemes/pg-scholarship'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in business management.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'MBA Scholarships',
            'description' => 'Scholarships for aspiring business managers.',
            'link' => 'https://www.mbacrystalball.com/scholarships'
        ]
    ],
    'Digital Marketer' => [
        [
            'name' => 'National Digital Marketing Scholarship',
            'description' => 'Scholarships for students pursuing digital marketing courses.',
            'link' => 'https://www.digitalmarketinginstitute.com/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in digital marketing.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Google Digital Garage Scholarships',
            'description' => 'Scholarships for students learning digital marketing through Google.',
            'link' => 'https://learndigital.withgoogle.com/digitalgarage'
        ]
    ],
    'Entrepreneur' => [
        [
            'name' => 'National Entrepreneurship Scholarship',
            'description' => 'Scholarships for students pursuing entrepreneurship courses.',
            'link' => 'https://www.startupindia.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in entrepreneurship.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Startup India Seed Fund Scheme',
            'description' => 'Funding and scholarships for aspiring entrepreneurs.',
            'link' => 'https://www.startupindia.gov.in/seed-fund'
        ]
    ],
    'Human Resource Manager' => [
        [
            'name' => 'National HR Management Scholarship',
            'description' => 'Scholarships for students pursuing human resource management courses.',
            'link' => 'https://www.shrm.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in HR management.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'SHRM Foundation Scholarships',
            'description' => 'Scholarships for aspiring HR managers.',
            'link' => 'https://www.shrm.org/foundation/scholarships'
        ]
    ],
    'Hotel Manager' => [
        [
            'name' => 'National Hospitality Scholarship',
            'description' => 'Scholarships for students pursuing hotel management courses.',
            'link' => 'https://www.ihma.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in hotel management.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'IHCL Scholarship Program',
            'description' => 'Scholarships for aspiring hotel managers.',
            'link' => 'https://www.tajhotels.com/scholarships'
        ]
    ],
    'Lawyer' => [
        [
            'name' => 'Bar Council of India Scholarships',
            'description' => 'Scholarships for law students.',
            'link' => 'https://www.barcouncilofindia.org/'
        ]
    ],
    'Civil Services' => [
        [
            'name' => 'National Civil Services Scholarship',
            'description' => 'Scholarships for students preparing for civil services exams.',
            'link' => 'https://www.upsc.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students preparing for civil services.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'UPSC Coaching Scholarships',
            'description' => 'Scholarships for civil services aspirants.',
            'link' => 'https://www.upsc.gov.in/scholarships'
        ]
    ],
    'Judge' => [
        [
            'name' => 'National Judicial Scholarship',
            'description' => 'Scholarships for students pursuing law and judicial studies.',
            'link' => 'https://www.indiacode.nic.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in law and judicial studies.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Bar Council of India Scholarships',
            'description' => 'Scholarships for aspiring judges and lawyers.',
            'link' => 'https://www.barcouncilofindia.org/scholarships'
        ]
    ],
    'Bank PO' => [
        [
            'name' => 'National Bank PO Scholarship',
            'description' => 'Scholarships for students preparing for bank PO exams.',
            'link' => 'https://www.ibps.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students preparing for bank PO exams.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'RBI Scholarship for Bank PO Aspirants',
            'description' => 'Scholarships for aspiring bank POs.',
            'link' => 'https://www.rbi.org.in/scholarships'
        ]
    ],
    'Indian Army Officer' => [
        [
            'name' => 'National Defence Academy (NDA) Scholarship',
            'description' => 'Scholarships for students preparing for NDA exams.',
            'link' => 'https://www.joinindianarmy.nic.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in defence studies.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Sainik School Scholarships',
            'description' => 'Scholarships for aspiring Indian Army officers.',
            'link' => 'https://www.sainikschoolsociety.in/scholarships'
        ]
    ],
    'Indian Navy Officer' => [
        [
            'name' => 'National Naval Academy Scholarship',
            'description' => 'Scholarships for students preparing for Indian Navy exams.',
            'link' => 'https://www.joinindiannavy.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in naval studies.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Indian Navy Scholarships',
            'description' => 'Scholarships for aspiring Indian Navy officers.',
            'link' => 'https://www.joinindiannavy.gov.in/scholarships'
        ]
    ],
    'Indian Air Force Officer' => [
        [
            'name' => 'National Air Force Academy Scholarship',
            'description' => 'Scholarships for students preparing for Indian Air Force exams.',
            'link' => 'https://www.careerairforce.nic.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in air force studies.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Indian Air Force Scholarships',
            'description' => 'Scholarships for aspiring Indian Air Force officers.',
            'link' => 'https://www.careerairforce.nic.in/scholarships'
        ]
    ],
    'Public Policy Analyst' => [
        [
            'name' => 'National Public Policy Scholarship',
            'description' => 'Scholarships for students pursuing public policy courses.',
            'link' => 'https://www.niti.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in public policy.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Brookings Institution Scholarships',
            'description' => 'Scholarships for aspiring public policy analysts.',
            'link' => 'https://www.brookings.edu/scholarships'
        ]
    ],
    'Physicist' => [
        [
            'name' => 'National Physics Scholarship',
            'description' => 'Scholarships for students pursuing physics courses.',
            'link' => 'https://www.aps.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in physics.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Indian Physics Association Scholarships',
            'description' => 'Scholarships for aspiring physicists.',
            'link' => 'https://www.ipa-india.org/scholarships'
        ]
    ],
    'Chemist' => [
        [
            'name' => 'National Chemistry Scholarship',
            'description' => 'Scholarships for students pursuing chemistry courses.',
            'link' => 'https://www.acs.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in chemistry.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Indian Chemical Society Scholarships',
            'description' => 'Scholarships for aspiring chemists.',
            'link' => 'https://www.ics.org.in/scholarships'
        ]
    ],
    'Environmental Scientist' => [
        [
            'name' => 'National Environmental Science Scholarship',
            'description' => 'Scholarships for students pursuing environmental science courses.',
            'link' => 'https://www.moef.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in environmental science.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'UNEP Scholarships',
            'description' => 'Scholarships for aspiring environmental scientists.',
            'link' => 'https://www.unep.org/scholarships'
        ]
    ],
    'Forensic Scientist' => [
        [
            'name' => 'National Forensic Science Scholarship',
            'description' => 'Scholarships for students pursuing forensic science courses.',
            'link' => 'https://www.nfsu.ac.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in forensic science.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'American Academy of Forensic Sciences Scholarships',
            'description' => 'Scholarships for aspiring forensic scientists.',
            'link' => 'https://www.aafs.org/scholarships'
        ]
    ],
    'Astronomer' => [
        [
            'name' => 'National Astronomy Scholarship',
            'description' => 'Scholarships for students pursuing astronomy courses.',
            'link' => 'https://www.iiap.res.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in astronomy.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'International Astronomical Union Scholarships',
            'description' => 'Scholarships for aspiring astronomers.',
            'link' => 'https://www.iau.org/scholarships'
        ]
    ],
    'Mathematician' => [
        [
            'name' => 'National Mathematics Scholarship',
            'description' => 'Scholarships for students pursuing mathematics courses.',
            'link' => 'https://www.ams.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in mathematics.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Indian Mathematical Society Scholarships',
            'description' => 'Scholarships for aspiring mathematicians.',
            'link' => 'https://www.indianmathsociety.org/scholarships'
        ]
    ],
    'Microbiologist' => [
        [
            'name' => 'National Microbiology Scholarship',
            'description' => 'Scholarships for students pursuing microbiology courses.',
            'link' => 'https://www.asm.org/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in microbiology.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Indian Association of Microbiologists Scholarships',
            'description' => 'Scholarships for aspiring microbiologists.',
            'link' => 'https://www.iamindia.org/scholarships'
        ]
    ],
    'Genetic Engineer' => [
        [
            'name' => 'National Genetic Engineering Scholarship',
            'description' => 'Scholarships for students pursuing genetic engineering courses.',
            'link' => 'https://www.dbtindia.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in genetic engineering.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'International Society for Genetic Engineering Scholarships',
            'description' => 'Scholarships for aspiring genetic engineers.',
            'link' => 'https://www.isge.org/scholarships'
        ]
    ],
    'Air Hostess / Cabin Crew' => [
        [
            'name' => 'National Aviation Scholarship',
            'description' => 'Scholarships for students pursuing cabin crew and aviation courses.',
            'link' => 'https://www.dgca.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in aviation.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'International Air Transport Association (IATA) Scholarships',
            'description' => 'Scholarships for aspiring cabin crew members.',
            'link' => 'https://www.iata.org/scholarships'
        ]
    ],
    'Travel Blogger' => [
        [
            'name' => 'National Travel Writing Scholarship',
            'description' => 'Scholarships for students pursuing travel blogging and writing courses.',
            'link' => 'https://www.tourism.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in travel blogging.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'Lonely Planet Travel Writing Scholarships',
            'description' => 'Scholarships for aspiring travel bloggers.',
            'link' => 'https://www.lonelyplanet.com/scholarships'
        ]
    ],
    'Tour Guide' => [
        [
            'name' => 'National Tourism Scholarship',
            'description' => 'Scholarships for students pursuing tour guide and tourism courses.',
            'link' => 'https://www.tourism.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in tourism and travel.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'World Tourism Organization Scholarships',
            'description' => 'Scholarships for aspiring tour guides.',
            'link' => 'https://www.unwto.org/scholarships'
        ]
    ],
    'Fitness Trainer' => [
        [
            'name' => 'National Fitness Scholarship',
            'description' => 'Scholarships for students pursuing fitness training courses.',
            'link' => 'https://www.sportsauthorityofindia.nic.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in fitness training.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'International Fitness Association Scholarships',
            'description' => 'Scholarships for aspiring fitness trainers.',
            'link' => 'https://www.ifafitness.com/scholarships'
        ]
    ],
    'Yoga Instructor' => [
        [
            'name' => 'National Yoga Scholarship',
            'description' => 'Scholarships for students pursuing yoga instructor courses.',
            'link' => 'https://www.yoga.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in yoga instruction.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'International Yoga Federation Scholarships',
            'description' => 'Scholarships for aspiring yoga instructors.',
            'link' => 'https://www.internationalyogafederation.org/scholarships'
        ]
    ],
    'E-Sports Player' => [
        [
            'name' => 'National E-Sports Scholarship',
            'description' => 'Scholarships for students pursuing e-sports and gaming courses.',
            'link' => 'https://www.esportsfederation.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in e-sports.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'International E-Sports Federation Scholarships',
            'description' => 'Scholarships for aspiring e-sports players.',
            'link' => 'https://www.ie-sf.org/scholarships'
        ]
    ],
    'Influencer / YouTuber' => [
        [
            'name' => 'National Digital Content Creation Scholarship',
            'description' => 'Scholarships for students pursuing digital content creation and influencer marketing courses.',
            'link' => 'https://www.digitalindia.gov.in/scholarships'
        ],
        [
            'name' => 'AICTE Pragati Scholarship',
            'description' => 'Scholarships for girl students in digital content creation.',
            'link' => 'https://www.aicte-india.org/schemes/pragati-scholarship'
        ],
        [
            'name' => 'YouTube Creator Academy Scholarships',
            'description' => 'Scholarships for aspiring YouTubers and influencers.',
            'link' => 'https://creatoracademy.youtube.com/scholarships'
        ]
    ],
    // Add schemes for other careers here
];

if (!array_key_exists($career, $schemes)) {
    echo "<p>No schemes available for this career yet.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Schemes for <?= htmlspecialchars($career) ?></title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <header>
        <h1>Government Scholarships/Schemes for <?= htmlspecialchars($career) ?></h1>
    </header>
    <main class="schemes-container">
        <?php foreach ($schemes[$career] as $scheme): ?>
            <div class="scheme-card">
                <h2><?= htmlspecialchars($scheme['name']) ?></h2>
                <p><?= htmlspecialchars($scheme['description']) ?></p>
                <a href="<?= htmlspecialchars($scheme['link']) ?>" target="_blank" class="scheme-link">Learn More</a>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>