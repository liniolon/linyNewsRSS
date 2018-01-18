<?php
        $myPDO = new PDO('sqlite:G:\Projects\telegram-bot\newsRSS\news.db');
?>

<!doctype html>
<html>
    <head>
        <title>وب‌سایت خبری هدینگ - Heading news website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div class="row">
            <div class="col-sm-3 mt-5">
                <div class="list-group text-center ml-5">
                    <a class="btn btn-outline-info btn-block mb-2" href="index.php" type="button">وب‌سایت خبری هدینگ</a>
                    <a href="index.php?news=farsnews" class="list-group-item list-group-item-warning">خبرگزاری فارس</a>
                    <a href="index.php?news=javanonline" class="list-group-item list-group-item-danger">جوان آنلاین</a>
                    <a href="index.php?news=yjc" class="list-group-item list-group-item-danger">باشگاه خبرنگاران جوان</a>
                    <a href="index.php?news=irna" class="list-group-item list-group-item-primary">خبرگزاری ایرنا</a>
                    <a href="index.php?news=isna" class="list-group-item list-group-item-primary">خبرگزاری ایسنا</a>
                    <a href="index.php?news=varzesh3" class="list-group-item list-group-item-action">ورزش 3</a>
                    <a href="index.php?news=mizanonline" class="list-group-item list-group-item-dark">خبرگزاری میزان</a>
                    <a href="index.php?news=tabnak" class="list-group-item list-group-item-primary">تابناک</a>
                    <a href="index.php?news=ibna" class="list-group-item list-group-item-info">ایبنا</a>
                    <a href="index.php?news=ilna" class="list-group-item list-group-item-primary">ایلنا</a>
                    <a href="index.php?news=tasnimnews" class="list-group-item list-group-item-danger">خبرگزاری تسنیم</a>
                    <a href="index.php?news=shabestan" class="list-group-item list-group-item-info">شبستان</a>
                    <a href="index.php?news=shana" class="list-group-item list-group-item-secondry">شانا</a>
                    <a href="index.php?news=mojnews" class="list-group-item list-group-item-info">موج نیوز</a>
                    <a href="index.php?news=mehrnews" class="list-group-item list-group-item-primary">مهرنیوز</a>
                    <a href="index.php?news=abna24" class="list-group-item list-group-item-warning">ابنا ۲۴</a>
                    <a href="index.php?news=khabaronline" class="list-group-item list-group-item-primary">خبرآنلاین</a>
                    <a href="index.php?news=borna" class="list-group-item list-group-item-danger">برنا</a>
                    <a href="index.php?news=alef" class="list-group-item list-group-item-action">الف</a>
                    <a href="index.php?news=entekhab" class="list-group-item list-group-item-info">انتخاب</a>
                    <a href="index.php?news=jahannews" class="list-group-item list-group-item-primary">جهان نیوز</a>
                    <a href="index.php?news=asriran" class="list-group-item list-group-item-action">عصر ایران</a>
                    <a href="index.php?news=fararu" class="list-group-item list-group-item-warning">فرارو</a>
                    <a href="index.php?news=mashreghnews" class="list-group-item list-group-item-info">مشرق نیوز</a>
                    <a href="index.php?news=rajanews" class="list-group-item list-group-item-success">پایگاه اطلاع رسانی رجانیوز</a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <?php
                        if (!(isset($_GET['news'])))
                        {
                            echo '
                            <div class="col-sm-3 mt-5">
                        
                    </div>
                    <div class="col-sm-9 mt-5">
                        <div class="text-right">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title text-center">درباره وب‌سایت هدینگ</h3>
                                    <p>وب‌سایت خبری هدینگ با یک ایده‌ی صرفا آموزشی کار با خواندن خوراک خبر با زبان برنامه‌نویسی پایتون شروع به کار کرد</p>
                                    <p style="direction: rtl;">در ادامه مسیر با استفاده زبان برنامه‌نویسی php و تکنولوژی bootstrap صفحه‌ای که اکنون در حضور شما قابل مشاهده است ساخته شد</p>
                                    <p style="direction: rtl;">اگر مایل به حمایت از این پروژه هستید بر روی <a href="donate.php">اینجا</a> کلیک کنید.</p>
                                    <p style="direction: rtl;">
                                        برای تماس با من از یکی از راه های ارتباطی زیر می‌توانید استفاده کنید.<br>تلگرام:‌<a href="http://www.t.me/liniolon">@liniolon</a><br>پست الکترونیکی:‌<abbr>amirkouhkan1@gmail.com</abbr>
                                    
                                    </p>
                                </div>
                            </div>  
                        </div>
                    </div>
                            ';
                        }
                        else
                        {
                            $result = $myPDO->query("SELECT * FROM news ORDER BY id DESC");
                            foreach($result as $row)
                            {
                                if($_GET['news'] == 'farsnews')
                                {
                                    if(strpos($row['link'], 'farsnews'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'javanonline')
                                {
                                    if(strpos($row['link'], 'javanonline'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'yjc')
                                {
                                    if(strpos($row['link'], 'yjc'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'irna')
                                {
                                    if(strpos($row['link'], 'irna'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'isna')
                                {
                                    if(strpos($row['link'], 'isna'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'varzesh3')
                                {
                                    if(strpos($row['link'], 'varzesh3'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'mizanonline')
                                {
                                    if(strpos($row['link'], 'mizanonline'))
                                    {
                                    echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'tabnak')
                                {
                                    if(strpos($row['link'], 'tabnak'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'ibna')
                                {
                                    if(strpos($row['link'], 'ibna'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'ilna')
                                {
                                    if(strpos($row['link'], 'ilna'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'tasnimnews')
                                {
                                    if(strpos($row['link'], 'tn.ai'))
                                    {
                                        if($row['title'] == NULL)
                                        {
                                            echo '  
                                                <div class="col-sm-6">
                                                    <p>خبر های این خبرگزاری ثبت نشده است</p>
                                                </div>
                                        <div class="col-sm-6">
                                                    
                                                </div>
                                        
                                        ';
 
                                        }
                                        else
                                        {
                                          echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
  
                                        }
                                    }
                                }
                                
                                else if($_GET['news'] == 'shabestan')
                                {
                                    if(strpos($row['link'], 'shabestan'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'shana')
                                {
                                    if(strpos($row['link'], 'shana'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'mojnews')
                                {
                                    if(strpos($row['link'], 'mojnews'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'mehrnews')
                                {
                                    if(strpos($row['link'], 'mehrnews'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'abna24')
                                {
                                    if(strpos($row['link'], 'abna24'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'khabaronline')
                                {
                                    if(strpos($row['link'], 'khabaronline'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'borna')
                                {
                                    if(strpos($row['link'], 'borna'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'alef')
                                {
                                    if(strpos($row['link'], 'alef'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'entekhab')
                                {
                                    if(strpos($row['link'], 'entekhab'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'jahannews')
                                {
                                    if(strpos($row['link'], 'jahannews'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'asriran')
                                {
                                    if(strpos($row['link'], 'asriran'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'fararu')
                                {
                                    if(strpos($row['link'], 'fararu'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'mashreghnews')
                                {
                                    if(strpos($row['link'], 'mashreghnews'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                                else if($_GET['news'] == 'rajanews')
                                {
                                    if(strpos($row['link'], 'rajanews'))
                                    {
                                        echo '  
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-9 text-right">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                     <div style="direction: rtl;" class="card-title">
                                                        <h5>'.$row['title'].'</h5>
                                                     </div>
                                                     <a target="_blank" href="'.$row['link'].'" class="btn btn-outline-action ">مشاهده خبر کامل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                            }
                        }
                    ?>
                </div>
        </div>
        </div>
    </body>
</html>