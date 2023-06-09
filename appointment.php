<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&family=Metamorphous&family=Rubik&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2a6eac1b83.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <section id="mobile-profile-picture">
            <img src="images/hanna_persona_mobile_profile.png" alt="mobile profile photo" title="mobile profile photo">
        </section>
        <section class="logo-con">
            <a href="index.html" id="logo"></a>
            <a href="index.html" id="logo-mobile"></a>
        </section>
        <nav>
            <section>
                <input type="checkbox" id="menu-toggle" class="mobile-toggle-menu">
                <div class="hamburger"></div>

                <ul class="mobile-menu">
                    <li class="divider-item" id="mobile-menu-header">תפריט</li>

                    <li><a href="#"><i class="fa-solid fa-house"></i>&nbsp;לוח בקרה</a></li>
                    <li><a href="#"><i class="fa-solid fa-temperature-half"></i>&nbsp; מכסה מטופלים</a></li>
                    <li><a href="appointment.html"><i class="fa-regular fa-calendar-check"></i>&nbsp;זימון תורים</a>
                    </li>
                    <li class="divider-item"><a href="index.html"><i class="fa-solid fa-table-list"></i>&nbsp;רשימת
                            מטופלים</a></li>

                    <li class="divider-item-space"></li>
                    <li><a href="#"><i class="fa-solid fa-box"></i>&nbsp;לוגיסטיקה</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>&nbsp;הגדרות</a></li>
                    <li class="divider-item"><a href="#"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;התנתקות</a></li>
                    <li class="white-color-divide"></li>

                    <li>
                        <a href="index.html" id="second-logo-mobile"></a>
                    </li>
                </ul>
            </section>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="#">לוגיסטיקה</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">רשימת מטופלים</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="appointment.html">זימון תורים</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">מכסה מטופלים</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">לוח בקרה </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">
                        <img src="images/hanna-persona-profile.png" alt="profile picture" title="profile picture">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">עריכת פרופיל</a></li>
                        <li><a class="dropdown-item" href="#">הגדרות</a></li>
                        <li><a class="dropdown-item" href="#">התנתקות</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="appointmentWrapper">
            <section id="h1-appointments">
                <h5>טופס קביעת תור</h5>
            </section>
            <section id="appointment-form-wrapper">
                <form action="php/get_form.php" method="get" id="appointment-form" class="needs-validation" novalidate>
                    <div id="appointment-inside-form-wrapper">
                        <div id="appointment-left-side-wrapper">
                            <label id="appointment-left-side-label">העלת מסמכים</label>
                            <input type="file" class="upload_hide" id="upload_costum">
                            <label for="upload_costum" class="upload_label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span class="drag_text"><span class="font color">לחץ </span>או גרור מסמכים</span>
                            </label>
                        </div>
                        <div id="appointment-right-side-wrapper">
                            <label id="appointment-third-wrapper-label">קיים במערכת</label>
                            <div id="appointment-third-wrapper">

                                <div id="appointment-third-wrapper-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exists" value="no"
                                            id="flexRadioOne" required>
                                        <label class="form-check-label" for="flexRadioOne">
                                            לא
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exists" value="yes"
                                            id="flexRadioTwo" required>
                                        <label class="form-check-label" for="flexRadioTwo">
                                            כן
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="appointment-one-and-two-wrapper">
                                <div id="appointment-first-wrapper">
                                    <label class="form-label">שם פרטי</label>
                                    <input type="text" class="form-control written" name="private_name" value=""
                                        pattern="[A-Za-z\u0590-\u05FF]+">
                                    <br>
                                    <label>אימייל</label>
                                    <input type="email" class="form-control written" name="mail" value=""
                                        pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
                                    <br>
                                    <label>גיל </label>
                                    <select name="age" class="form-select" id="age-select" required>
                                        <option value="" disabled selected>-</option>
                                    </select>
                                    <br>
                                    <label class="form-label"> תאריך</label>
                                    <input type="date" class="form-control written" name="date" value="">
                                </div>
                                <div id="appointment-second-wrapper">
                                    <label class="form-label">שם משפחה</label>
                                    <input type="text" class="form-control written" name="last_name" value=""
                                        pattern="[A-Za-z\u0590-\u05FF]+">
                                    <br>
                                    <label class="form-label">ת"ז</label>
                                    <input type="number" class="form-control written" name="id_number" min="0"
                                        max="9999999999" value="">
                                    <br>
                                    <label>סוג דימות</label>
                                    <select name="image_type" class="form-select" required>
                                        <option value="">-</option>
                                        <option value="x-ray">רנטגן</option>
                                        <option value="C.T">C.T</option>
                                        <option value="ultrasound">אולטרסאונד</option>
                                        <option value="M.R.I">M.R.I</option>
                                    </select>
                                    <br>
                                    <label class="form-label">שעה</label>
                                    <input type="time" class="form-control written" name="time" value="">
                                </div>
                            </div>
                            <div id="appointment-down-side-wrapper">
                                <br>
                                <label>הערות</label>
                                <textarea class="form-control" name="moreToAdd"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="appointment-submit-wrapper">
                        <input type="submit" id="submit-button" class="btn btn-primary" value="שמור" disabled>
                    </div>
                </form>
            </section>
        </section>
    </main>
    <script src="js/script.js"></script>
</body>

</html>