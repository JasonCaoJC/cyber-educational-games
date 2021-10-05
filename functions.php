<?php
    $games = [
        [
            "name" => "Anti-Phishing Phil",
            "audiences" => [true, true, true, true], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "CSEC 2017",
                    "framework_map" => ["Data Security - Data Integrity and Authentication", "Human Security - Social Engineering"]
                ],
                [
                    "name" => "NICE Framework",
                    "framework_map" => ["Analyze - Exploitation Analysis", "Protect and Defend - Cyber Defense Analysis"]
                ],
                [
                    "name" => "CATS - CCI Topics",
                    "framework_map" => ["Identify attacks against CIA triad and authentication", "Identify possible phishing emails from a set of samples"]
                ],
                [
                    "name" => "CATS - CCA Topics",
                    "framework_map" => ["Integrity", "Confidentiality", "Manage Risks", "Social Engineering"]
                ],
                [
                    "name" => "GenCyber Concepts",
                    "framework_map" => ["Confidentiality", "Integrity", "Think like an adversary"]
                ]
            ],
            "url" => "https://www.ucl.ac.uk/cert/antiphishing/",
            "description" => "Anti-Phishing Phil is an interactive game that teaches users how to identify phishing URLs, where to look for cues in web browsers, and how to use search engines to find legitimate sites. Users will play as Phil, a young fish trying to find food while avoiding the dangers lurking in InterWeb Bay. Help Phil determine which worms - or URLs - are safe and which are untrustworthy.",
            "short_description" => "Interactive game about identifying phishing URLs",
            "screenshots" => ["assets/img/games/anti-phishing-phil/anti-phishing-phil1.png", "assets/img/games/anti-phishing-phil/anti-phishing-phil2.png", "assets/img/games/anti-phishing-phil/anti-phishing-phil3.png"],
            "thumbnail" => "assets/img/games/anti-phishing-phil/anti-phishing-phil2.png"
        ],
        [
            "name" => "Cyber Awareness Challenge",
            "audiences" => [false, false, true, true], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "CSEC 2017",
                    "framework_map" => ["Data Security - Data Integrity and Authentication, Access Control", "System Security - System Access, System Control", "Human Security - Social Engineering"]
                ],
                [
                    "name" => "NICE Framework",
                    "framework_map" => ["Protect and Defend - Incident Response", "Oversee and Govern - Training Education and Awareness"]
                ],
                [
                    "name" => "CATS - CCI Topics",
                    "framework_map" => ["Identify attacks against CIA triad and authentication", "Identify risky behaviors"]
                ],
                [
                    "name" => "CATS - CCA Topics",
                    "framework_map" => ["Authentication", "Confidentiality", "Manage Risks", "Insider Threat", "Access Control", "Incident Analysis"]
                ]
            ],
            "url" => "https://public.cyber.mil/training/cyber-awareness-challenge/",
            "description" => "The Cyber Awareness Challenge is a training course, developed by the Department of Defense, that provides an overview of cybersecurity threats and best practices to keep information and information systems secure. Rather than using a narrative format, the challenge presents cybersecurity and information systems security awareness instructional topics through first-person simulations and mini-game challenges that allow the user to practice and review cybersecurity concepts in an interactive manner.",
            "short_description" => "Training course with first-person cybersecurity simulations and mini-game challenges",
            "screenshots" => ["assets/img/games/cyber-awareness-challenge/cyber-awareness-challenge-cover.jpeg", "assets/img/games/cyber-awareness-challenge/cyber-awareness-challenge-1.png", "assets/img/games/cyber-awareness-challenge/cyber-awareness-challenge-2.png", "assets/img/games/cyber-awareness-challenge/cyber-awareness-challenge-3.png"],
            "thumbnail" => "assets/img/games/cyber-awareness-challenge/cyber-awareness-challenge-cover.jpeg"
        ],
        [
            "name" => "CyberCIEGE",
            "audiences" => [true, true, true, true], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "CSEC 2017",
                    "framework_map" => ["Data Security - Data Integrity and Authentication, Access Control", "Software Security - Implementation", "Connection Security - Network Defense", "System Security - System Access, System Control", "System Security - System Access, System Control", "Organizational Security - Social Engineering"]
                ],
                [
                    "name" => "NICE Framework",
                    "framework_map" => ["Operate and Maintain - Systems Analysis", "Oversee and Govern - Cybersecurity Management", "Protect and Defend - Vulnerability Assessment and Management", "Securely Provision - Risk Management"]
                ],
                [
                    "name" => "CATS - CCI Topics",
                    "framework_map" => ["Identify vulnerabilities and failure", "Devise a defense", "Identify risky behaviors", "Devise security plan", "Identify possible phishing emails from a set of samples"]
                ],
                [
                    "name" => "CATS - CCA Topics",
                    "framework_map" => ["Authentication", "Integrity", "Confidentiality", "Confidentiality", "Manage Risks", "Access Control", "Social Engineering", "Design Secure Protocols", "Incident Analysis"]
                ],
                [
                    "name" => "Design Secure Protocols",
                    "framework_map" => ["Design Secure Protocols", "Confidentiality", "Confidentiality", "Integrity", "Think like an adversary"]
                ]
            ],
            "url" => "https://nps.edu/web/c3o/downloads",
            "description" => "CyberCIEGE enhances information assurance and cyber security education and training through the use of an interactive environment. In the CyberCIEGE virtual world, users spend virtual money to operate and defend their networks, and can watch the consequences of their choices. Players can purchase and configure workstations, servers, operating systems, applications, network devices, and make trade offs as they struggle to maintain a balance between budget, productivity, and security.",
            "short_description" => "Virtual world where users learn how to operate and defend networks",
            "screenshots" => ["assets/img/games/cyberciege/cyberciege-1.jpeg", "assets/img/games/cyberciege/cyberciege-2.png"],
            "thumbnail" => "assets/img/games/cyberciege/cyberciege-2.png"
        ],
        [
            "name" => "NOVA Labs",
            "audiences" => [true, true, false, false], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "GenCyber Concepts",
                    "framework_map" => ["Defense in Depth", "Integrity", "Think like an adversary"]
                ]
            ],
            "url" => "https://www.pbs.org/wgbh/nova/labs/lab/cyber/",
            "description" => "In the Cybersecurity Lab, players work for a start-up social network company that is the target of increasingly sophisticated cyber attacks. Working alongside their friend and colleague, their goal is to grow their tiny company into a global empire. To do this, players must complete challenges to strengthen their cyber defenses and thwart their attackers. There are four major gameplay components: a coding challenge, a password challenge, a social engineering challenge, and a series of cyber battles.",
            "short_description" => "Start a social network company while completing cyber defense challenges.",
            "screenshots" => ["assets/img/games/nova-labs/nova-labs-cover-1.png", "assets/img/games/nova-labs/nova-labs-1.jpeg", "assets/img/games/nova-labs/nova-labs-2.jpeg", "assets/img/games/nova-labs/nova-labs-3.jpeg"],
            "thumbnail" => "assets/img/games/nova-labs/nova-labs-cover-1.png"
        ],
        [
            "name" => "PASDJO",
            "audiences" => [false, false, true, false], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "CSEC 2017",
                    "framework_map" => ["Data Security - Data Integrity and Authentication", "System Security - System Access", "Human Security - Awareness and Understanding"]
                ],
                [
                    "name" => "CATS - CCI Topics",
                    "framework_map" => ["Identify risky behaviors", "Identify a vulnerability"]
                ],
                [
                    "name" => "CATS - CCA Topics",
                    "framework_map" => ["Authentication"]
                ]
            ],
            "url" => "https://password-game.firebaseapp.com",
            "description" => "In PASDJO, players are given 60 seconds to rate a list of randomly-generated passwords on a scale from 1 to 5 stars, 1 being weak and 5 being strong. Players will receive a score at the end as well as an assessment of their answers.",
            "short_description" => "Determine the strength of a list of generated passwords.",
            "screenshots" => ["assets/img/games/pasdjo/pasdjo-1.png", "assets/img/games/pasdjo/pasdjo-2.png", "assets/img/games/pasdjo/pasdjo-3.png"],
            "thumbnail" => "assets/img/games/pasdjo/pasdjo-cover.png"
        ],
        [
            "name" => "CyberStart Go",
            "audiences" => [false, false, true, true], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "CSEC 2017",
                    "framework_map" => ["Data Security - Data Integrity and Authentication, Cryptography, Digital Forensics", "System Security - System Access", "Software Security - Implementation", "Human Security - Identity Management"]
                ],
                [
                    "name" => "NICE Framework",
                    "framework_map" => ["Investigate - Digital Forensics", "Oversee and Govern - Training Education and Awareness"]
                ],
                [
                    "name" => "CATS - CCI Topics",
                    "framework_map" => ["Identify Risky Behaviors", "Identify Vulnerabilities in Software"]
                ],
                [
                    "name" => "CATS - CCA Topics",
                    "framework_map" => ["Authentication", "Operating System Security", "Software Vulnerability Analysis"]
                ]
            ],
            "url" => "https://go.joincyberstart.com/",
            "description" => "CyberStart Go, developed by the SANS Institute and funded by the National Science Foundation (NSF), is a 60-minute guided challenge that tests problem-solving skills while teaching cybersecurity concepts. Some of the topics covered are password security, social engineering, cryptology, network forensics, and many more. Complete all 12 challenges to win.",
            "short_description" => "60-minute challenge that tests problem-solving skills while teaching cybersecurity concepts.",
            "screenshots" => ["assets/img/games/cyberstart-go/cyberstart-go-cover.png", "assets/img/games/cyberstart-go/cyberstart-go-1.jpeg", "assets/img/games/cyberstart-go/cyberstart-go-2.jpeg", "assets/img/games/cyberstart-go/cyberstart-go-3.png"],
            "thumbnail" => "assets/img/games/cyberstart-go/cyberstart-go-cover-cropped.png"
        ],
        [
            "name" => "Safe Online Surfing",
            "audiences" => [true, true, false, false], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "GenCyber Concepts",
                    "framework_map" => ["Integrity", "Confidentiality", "Think like an Adversary"]
                ]
            ],
            "url" => "https://sos.fbi.gov/en/",
            "description" => "The FBI Safe Online Surfing (SOS) Internet Challenge is a free, educational program intended for students in third through eighth grades that teaches cyber safety and helps them become better digital citizens in a fun and engaging way. The program covers age-appropriate topics like cyberbullying, passwords, malware, social media, and more.",
            "short_description" => "Learn about cyber safety and become a better digital citizen in a fun and engaging way.",
            "screenshots" => ["assets/img/games/sos/sos-cover.png", "assets/img/games/sos/sos-1.png", "assets/img/games/sos/sos-2.png", "assets/img/games/sos/sos-3.png"],
            "thumbnail" => "assets/img/games/sos/sos-cover.png"
        ],
        [
            "name" => "Interland",
            "audiences" => [true, true, false, false], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "GenCyber Concepts",
                    "framework_map" => ["Integrity", "Think like an Adversary"]
                ]
            ],
            "url" => "https://beinternetawesome.withgoogle.com/en/interland",
            "description" => "Interland is an adventure-packed, interactive online game that is designed to teach kids the fundamentals of digital safety and citizenship through hands-on practice. Players will complete four levels: \"It’s Cool to Be Kind,\" \"Don’t Fall for Fake,\" \"Share with Care,\" and \"Secure Your Secrets.\"",
            "short_description" => "Interactive game designed to teach the fundamentals of digital safety and citizenship through hands-on practice.",
            "screenshots" => ["assets/img/games/interland/interland-cover.png", "assets/img/games/interland/interland-1.jpeg", "assets/img/games/interland/interland-2.png", "assets/img/games/interland/interland-3.png"],
            "thumbnail" => "assets/img/games/interland/interland-cover.png"
        ],
        [
            "name" => "Targeted Attack: The Game",
            "audiences" => [true, true, false, false], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "GenCyber Concepts",
                    "framework_map" => ["Defense in Depth", "Confidentiality", "Integrity", "Think Like an Adversary"]
                ]
            ],
            "url" => "http://targetedattacks.trendmicro.com/",
            "description" => "Targeted Attack is a “Choose Your Own Adventure” style game where you play as the CIO of a global organization called The Fugle. Your company is on the verge of making the first release of a mobile payment app and you are in charge of steering the project through its final stages. There are many competitors and individuals out there who would love to get their hands on the data held by your organization at such a critical time. Can you make the right choices to protect your company from an attack?",
            "short_description" => "Help your cpmpany make decisions in this “Choose Your Own Adventure” style game.",
            "screenshots" => ["assets/img/games/targeted-attack/targeted-attack-cover.jpeg", "assets/img/games/targeted-attack/targeted-attack-1.jpeg", "assets/img/games/targeted-attack/targeted-attack-2.jpeg"],
            "thumbnail" => "assets/img/games/targeted-attack/targeted-attack-cover-cropped.jpeg"
        ],
        [
            "name" => "The Missing Link: A Cybersecurity Mystery",
            "audiences" => [true, true, false, false], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "CSEC 2017",
                    "framework_map" => ["Integrity", "Think Like an Adversary"]
                ]
            ],
            "url" => "https://it.tamu.edu/missinglink/",
            "description" => "The Missing Link was created by the Texas A&M Division of Information Technology to test players' cyber smarts and teach useful tips for staying safe online. Players help private investigator Bobby Joe Bordeaux in gathering clues to find out what happened to social media influencer Rollie Reed. Help solve the mystery by reviewing emails and text messages and looking through Rollie’s office to see if you can find any clues.",
            "short_description" => "Help a private investigator gather clues and solve the cybersecurity mystery.",
            "screenshots" => ["assets/img/games/the-missing-link/the-missing-link-cover.png", "assets/img/games/the-missing-link/the-missing-link-1.png", "assets/img/games/the-missing-link/the-missing-link-2.png", "assets/img/games/the-missing-link/the-missing-link-3.png"],
            "thumbnail" => "assets/img/games/the-missing-link/the-missing-link-cover-cropped.png"
        ],
        [
            "name" => "Aggie LIFE",
            "audiences" => [true, true, false, false], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "GenCyber Concepts",
                    "framework_map" => ["Defense in Depth", "Confidentiality"]
                ]
            ],
            "url" => "https://it.tamu.edu/aggielife/",
            "description" => "Aggie Life is an online board game created by the Texas A&M Division of Information Technology to test players' cyber smarts and teach useful tips for staying safe online. Players spin the wheel to move through the board, answering cybersecurity questions to earn money along the way.",
            "short_description" => "Online board game where money is earned through answering cybersecurity questions.",
            "screenshots" => ["assets/img/games/aggielife/aggielife-cover.png", "assets/img/games/aggielife/aggielife-1.png", "assets/img/games/aggielife/aggielife-2.png", "assets/img/games/aggielife/aggielife-3.png"],
            "thumbnail" => "assets/img/games/aggielife/aggielife-cover-cropped.png"
        ],
        [
            "name" => "Education Arcade",
            "audiences" => [false, false, true, true], //for students, teachers, college, and industry respectively
            "mappings" => [
                [
                    "name" => "CSEC 2017",
                    "framework_map" => ["Data Security - Data Integrity and Authentication, Access Control", "System Security - System Access, System Control", "Human Security - Identity Management, Social Engineering", "Societal Security - Cybercrime"]
                ],
                [
                    "name" => "NICE Framework",
                    "framework_map" => ["Oversee and Govern - Training Education and Awareness", "Analyze - Exploitation Analysis"]
                ],
                [
                    "name" => "CATS - CCI Topics",
                    "framework_map" => ["Identify attacks against CIA triad and authentication", "Identify risky behaviors", "Identify a vulnerability", "Identify possible phishing emails from a set of samples"]
                ],
                [
                    "name" => "CATS - CCA Topics",
                    "framework_map" => ["Authentication", "Integrity", "Confidentiality", "Assess Vulnerabilities", "Manage Risks"]
                ]
            ],
            "url" => "https://www.educationarcade.co.nz/game-time",
            "description" => "Education Arcade is focused on providing people with a memorable learning experience designed to help keep them safe online through the use of gamified e-Learning. Players learn about password security, data loss protection, and how to detect phishing and ransomware through a series of short 2D platformer games.",
            "short_description" => "A series of short 2D platformer games focused on teaching a variety of cybersecurity topics.",
            "screenshots" => ["assets/img/games/education-arcade/education-arcade-cover.png", "assets/img/games/education-arcade/education-arcade-1.png", "assets/img/games/education-arcade/education-arcade-2.png", "assets/img/games/education-arcade/education-arcade-3.png"],
            "thumbnail" => "assets/img/games/education-arcade/education-arcade-cover-cropped.png"
        ]
    ];

    function getAudiences($audiences) {
        $res = "";
        if ($audiences[0]) {
            $res .= "filter-students ";
        };
        if ($audiences[1]) {
            $res .= "filter-teachers ";
        };
        if ($audiences[2]) {
            $res .= "filter-college ";
        };
        if ($audiences[3]) {
            $res .= "filter-industry ";
        };
        return $res;
    }

    function createSwiperSlide($screenshots) {
        for ($i = 0; $i < count($screenshots); $i++) { ?>
            <div class="swiper-slide">
                <img src="<?= $screenshots[$i] ?>" alt="">
            </div>
        <?
        }
    }

    function audiencesCheck($check) {
        if ($check) {
            return '<span class="material-icons text-success">check_circle</span>';
        }
        return '<span class="material-icons text-danger">unpublished</span>';
    }

    function mappingDetails($framework_map) {
        for ($i = 0; $i < count($framework_map); $i++) { ?>
            <p><span class="material-icons">
                    arrow_forward_ios
                </span><?= $framework_map[$i] ?>
            </p>
        <?
        }
    }

    function gameMappings($mappings) {
        for ($i = 0; $i < count($mappings); $i++) {?>
            <div class="col-md-6">
                <p class="fw-bold"><?= $mappings[$i]["name"]?></p>
                <?= mappingDetails($mappings[$i]["framework_map"]) ?>
            </div>
        <?
        }
    }

    function createGameCardS($game, $i) { ?>
        <div class="col-lg-3 col-md-6 game-item <?= getAudiences($game["audiences"]) ?>">
            <div class="game-wrap">
                <img src="<?= $game["thumbnail"] ?>" class="img-fluid" alt="">
                <div class="game-links">
                    <a href="<?= $game["thumbnail"] ?>" data-gallery="gameGallery" class="game-lightbox"
                        title="<?= $game["name"] ?>"><i class="bi bi-plus"></i></a>
                    <a href="game-details.php?index=<?= $i ?>" title="More Details"><i class="bi bi-link"></i></a>
                </div>
                <div class="game-info">
                    <h5><?= $game["name"] ?></h5>
                </div>
            </div>
        </div>
    <?
    };



    function createGameCard($game, $i) { ?>
        <div class="col-lg-4 col-md-6 game-item <?= getAudiences($game["audiences"]) ?>">
            <div class="game-wrap">
                <img src="<?= $game["thumbnail"] ?>" class="img-fluid" alt="">
                <div class="game-links">
                    <a href="<?= $game["thumbnail"] ?>" data-gallery="gameGallery" class="game-lightbox"
                        title="<?= $game["name"] ?>"><i class="bi bi-plus"></i></a>
                    <a href="game-details.php?index=<?= $i ?>" title="More Details"><i class="bi bi-link"></i></a>
                </div>
                <div class="game-info">
                    <h4><?= $game["name"] ?></h4>
                    <p><?= $game["short_description"] ?></p>
                </div>
            </div>
        </div>
    <?
    };