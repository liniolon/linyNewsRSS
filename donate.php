
<?php

    #$MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'; //Required
    if(isset($_POST['btnAction']))
    {
        $Amount = $_POST['txtPrice']; //Amount will be based on Toman - Required
    $Description = 'توضیحات تراکنش تستی'; // Required
    $Email = $_POST['txtEmail']; // Optional
    $Mobile = '09123456789'; // Optional
    $CallbackURL = 'localhost/verify.php'; // Required


    $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

    $result = $client->PaymentRequest(
    [
    
    'Amount' => $Amount,
    'Description' => $Description,
    'Email' => $Email,
    'Mobile' => $Mobile,
    'CallbackURL' => $CallbackURL,
    ]
    );

    //Redirect to URL You can do it also by creating a form
    if ($result->Status == 100) {
    Header('Location: https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority);
    //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
    //Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
    } else {
    echo'ERR: '.$result->Status;
}
    }
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
                <form action="verify.php" method="post" class="form-horizontal" name="frmDonate">
                    <div class="form-group">
                        <label class="col-sm-3">نام و نام خانوادگی</label>
                        <div class="col-sm-9">
                            <input type="text" name="txtNames" class="form-control" placeholder="نام و نام خانوادگی خود را وارد کنید" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">پست الکترونیکی</label>
                        <div class="col-sm-9">
                            <input  type="text" name="txtEmail" class="form-control" placeholder="آدرس پست الکترونیکی خود را وارد کنید" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">مبلغ</label>
                        <div class="col-sm-9">
                            <input type="text" name="txtPrice" class="form-control" placeholder="مبلغ را به تومان وارد کنید" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-9">
                            <input type="submit" class="btn btn-action btn-block" name="btnAction" value="ثبت پرداخت" />
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>