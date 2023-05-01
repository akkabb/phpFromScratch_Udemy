<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('include/head.php');?>
</head>
<body>
    <div class="headings_homepage">
        <h1>My Target</h1>
        <h2>Why ??<span class="qMark">?<span></h2>
    </div>
    <header class="myTarget ">
        <blockquote>
        "I have decided to embark on a daily series of coding exercises to improve my programming skills and enhance my ability to effectively solve problems. Programming is a constantly evolving skill and it's important to continue developing it. By working on programming problems every day, I am practicing efficient and creative problem-solving skills. I am confident that this daily practice will allow me to progress quickly and significantly in my career as a developer and in general problem-solving skills. Additionally, I believe this will help me develop greater self-confidence as a programmer and become more comfortable with the programming challenges that I may face in the future."
        </blockquote>
    </header>
    <div class="container">
        <main>
            <h2 class="courses_content">Contenu du Cours</h2>
            <?php  $course_content_title = [
                "Learn the Basics of PHP Programming" => "Basics.php", 
                "Intermediate PHP" => "Intermediate", 
                "PHP Data Objects (PDO)" => "PDO",
                "PHP and MySQLi Database Integration" => "MySQLi",
                "Working with Laravel 4" => "Laravel4",
                "Common PHP Errors" => "Errors",
                "PHP security" => "php_security",
                "BB Codes" => "bb_codes",
                "How to check If a website is Up or Down" => "website_is_upOrDown",
                "How to create a 'Like Button'" => "Like_Button", 
                "Build a Non-Database Photo Album, plus LightBox" => "Photo_Album",
                "How to create a mailing List" => "mailing_List",
                "How to create a Spell Checker" => "Spell_Checker", 
                "How to create a Template Engine" => "Template_Engine", 
                "How to Create a Guestbook" => "Guestbook", 
                "Currency a Dynamic RSS Feed For Your Website Content" => "Dynamic_RSS",
                "3 PHP String Functions You Should Know" => "strings_Functions", 
                "E-mail Piping: Process E-mails with PHP" => "email_pipping", 
                "Find and Replace text" => "Find_Replace_Text", 
                "Create a mini Shopping Cart" => "Shopping_Cart",
                "Introduction to Facebook Application Development" => "FB_appDevelopment", 
                "Create a PHP/AJAX Chat Application" => "Php/Ajax", 
                "Working with multiple File UPloading" => "multipleFileUploading",
                "Create Your Own Non-Unique Hit Counter" => "Hit_Counter", 
                "Create a Rating System for Your Website" => "Rating_System", 
                "How to Read XML, RSS and ATOM Feeds" => "Feeds",
                "Create Your Own URL Shortener" => "Url_Shortener", 
                "Understanding Regular Ewpressions" => "Regular_Expressions", 
                "Create Your Own Search Engine For a Database" => "Search_Engine", 
                "Secure File Uploading" => "File_Uploading",
                "How to create a Shoutbox System" => "Shoutbox_System", 
                "Create a Thumbnail Image Generator" => "thumbnail",
                "How to Watermark an Image On Upload" => "Watermark",
                "cross site request forgery protection" => "cross_site",
                "Create an Auto-Suggest Drop Down Field" => "Auto_suggest",
                "How to translate Page Languages" => "Translate_pages",
                "Understanding Object Oriented Programming [OLd Content]" => "OOP",
                "How to create an Image Upload Website" => "image_UploadWebsite",
                "General Tutorials : Become a PHP EXPERT" => "Php_Expert",
                "PHP Object Oriented Programming Fundamentals" => "OOP_Fundamentals",
            ];?>
            <?php foreach($course_content_title as $title => $link){
                echo "<section class=\"content_titleWrapper\">
                    <h2><a href=\"$link\" class=\"course_title_link \" \">$title</a></h2>
                </section>";
            }
            ?>
            <p><a href="test.php">Luke</a></p>
        </main>
        <?php require_once('include/footer.php');?>
    </div>
</body>
</html>