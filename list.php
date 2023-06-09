<!DOCTYPE html>
<html>

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
          <li class="divider-item"><a href="index.html"><i class="fa-solid fa-table-list"></i>&nbsp;רשימת מטופלים</a>
          </li>

          <li class="divider-item-space"></li>
          <li><a href="#"><i class="fa-solid fa-box"></i>&nbsp;לוגיסטיקה</a></li>
          <li><a href="#"><i class="fa-solid fa-gear"></i>&nbsp;הגדרות</a></li>
          <li class="divider-item"><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;התנתקות</a>
          </li>
          <li class="white-color-divide"></li>

          <li>
            <a href="index.html" id="second-logo-mobile"></a>
          </li>
        </ul>


      </section>
      <ul class="nav nav-tabs">

        <li class="nav-item">
          <a class="nav-link" href="#">לוגיסטיקה</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.html">רשימת מטופלים</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointment.html">זימון תורים</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">מכסה מטופלים</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">לוח בקרה
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
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
    <section id="listWrapper">
      <section id="view_real_time">
        <section class="blue-view">
          <section class="all-container">
            <section class="title-text">
              <h6>MRI</h6>
            </section>
            <section class="blue">
              <section class="text-blue">
                <h6>שם: שלומי שבת</h6>
                <h6>M15 :מספר</h6>
              </section>
            </section>
          </section>

          <section class="all-container">
            <section class="title-text">
              <h6>CT</h6>
            </section>
            <section class="blue">
              <section class="text-blue">
                <h6>שם: דביר ישראל</h6>
                <h6>C15 :מספר</h6>
              </section>
            </section>
          </section>
          <section class="all-container">
            <section class="title-text">
              <h6>רנגטן</h6>
            </section>
            <section class="blue">
              <section class="text-blue">
                <h6>שם: אנה קשתי</h6>
                <h6>R10 :מספר</h6>
              </section>
            </section>
          </section>
          <section class="all-container">
            <section class="title-text">
              <h6>אולטרסאונד</h6>
            </section>
            <section class="blue">
              <section class="text-blue">
                <h6>שם: עומר דרור</h6>
                <h6>A11 :מספר</h6>
              </section>
            </section>
          </section>
          <section class="text-aside">
            <section class="text-blue">
              <h6>בטיפול</h6>
              <h6>כרגע</h6>
            </section>
          </section>
        </section>
      </section>
      <!-- form search -->
      <section class="container-list">
        <section class="center-form-search">
          <section class="form_container">
            <form id="search-list">
              <div class="form-control-wrapper">
                <label class="form-label">
                </label>
                <input type="search" class="form-control" placeholder="חיפוש">
              </div>
            </form>
          </section>
        </section>
        <section class="search-wrapper-pluse">
          <section class="plus">
            <a href="appointment.html">
              <i class="bi bi-plus-circle-fill"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path
                  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
              </svg></a>
            <p>הוספה</p>
          </section>
        </section>
      </section>

      <br>
      <!-- list patients -->
      <section class="list-Wrapper-table">
        <table class="table">
          <thead>
            <tr>

              <th></th>
              <th></th>
              <th scope="col">מספר</th>
              <th scope="col">שם פרטי</th>
              <th scope="col">שם משפחה</th>
              <th scope="col">גיל</th>
              <th scope="col">מין</th>
              <th scope="col">דחיפות</th>
              <th scope="col">סוגי דימות</th>
              <th scope="col">שעה</th>
              <th scope="col">תאריך</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td class="list-icons"><i class="bi bi-x-circle-fill"></i> <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
              </td>
              <td class="list-icons">
                <i class="bi bi-pencil"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
              </td>
              <td data-title="מספר">A11</td>
              <td data-title="שם פרטי">איילת</td>
              <td data-title="שם משפחה">ניסמוב</td>
              <td data-title="גיל">32</td>
              <td data-title="מין">נקבה</td>
              <td data-title="דחיפות">קל</td>
              <td data-title="סוגי דימות">אולטרסאונד</td>
              <td data-title="שעה">10:50</td>
              <td data-title="תאריך">24.02.23</td>
              <td class="left-arrow" data-title="כניסה"> <a href="patientProfile.html?patientId=7"><i
                    class="bi bi-chevron-left"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                  </svg></a>
              </td>
            </tr>
            <tr>
              <td class="list-icons"><i class="bi bi-x-circle-fill"></i> <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
              </td>
              <td class="list-icons"><i class="bi bi-pencil"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
              </td>
              <td data-title="מספר">R15</td>
              <td data-title="שם פרטי">שלום</td>
              <td data-title="שם משפחה">ישראלוף</td>
              <td data-title="גיל">35</td>
              <td data-title="מין">זכר</td>
              <td data-title="דחיפות">קל</td>
              <td data-title="סוגי דימות">רנגטן</td>
              <td data-title="שעה">10:00</td>
              <td data-title="תאריך">24.02.23</td>
              <td class="left-arrow" data-title="כניסה"><a href="patientProfile.html?patientId=8"><i
                    class="bi bi-chevron-left"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                  </svg></a>
              </td>
            </tr>
            <tr>
              <td class="list-icons"><i class="bi bi-x-circle-fill"></i> <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
              </td>
              <td class="list-icons"><i class="bi bi-pencil"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
              </td>
              <td data-title="מספר">A10</td>
              <td data-title="שם פרטי">מיה</td>
              <td data-title="שם משפחה">דגן</td>
              <td data-title="גיל">29</td>
              <td data-title="מין">נקבה</td>
              <td data-title="דחיפות">קל</td>
              <td data-title="סוגי דימות">אולטרסאונד</td>
              <td data-title="שעה">10:15</td>
              <td data-title="תאריך">24.02.23</td>
              <td class="left-arrow" data-title="כניסה"><a href="patientProfile.html?patientId=9"><i
                    class="bi bi-chevron-left"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                  </svg></a>
              </td>
            </tr>

            <tr>
              <td class="list-icons"><i class="bi bi-x-circle-fill"></i> <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
              </td>
              <td class="list-icons"><i class="bi bi-pencil"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
              </td>
              <td data-title="מספר">R17</td>
              <td data-title="שם פרטי">אייל</td>
              <td data-title="שם משפחה">גולדברג</td>
              <td data-title="גיל">37</td>
              <td data-title="מין">זכר</td>
              <td data-title="דחיפות">קל</td>
              <td data-title="סוגי דימות">CT</td>
              <td data-title="שעה">10:25</td>
              <td data-title="תאריך">24.02.23</td>
              <td class="left-arrow" data-title="כניסה"><a href="patientProfile.html?patientId=10"><i
                    class="bi bi-chevron-left"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                  </svg></a>
              </td>
            </tr>
            <tr>
              <td class="list-icons"><i class="bi bi-x-circle-fill"></i> <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
              </td>
              <td class="list-icons"><i class="bi bi-pencil"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
              </td>
              <td data-title="מספר">R18</td>
              <td data-title="שם פרטי">דני</td>
              <td data-title="שם משפחה">לוינסקי</td>
              <td data-title="גיל">60</td>
              <td data-title="מין">זכר</td>
              <td data-title="דחיפות">קל</td>
              <td data-title="סוגי דימות">MRI</td>
              <td data-title="שעה">10:30</td>
              <td data-title="תאריך">24.02.23</td>
              <td class="left-arrow" data-title="כניסה"><a href="patientProfile.html?patientId=11"><i
                    class="bi bi-chevron-left"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                  </svg></a>
              </td>
            </tr>
            <tr>
              <td class="list-icons"><i class="bi bi-x-circle-fill"></i> <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
              </td>
              <td class="list-icons"><i class="bi bi-pencil"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
              </td>
              <td data-title="מספר">C16</td>
              <td data-title="שם פרטי">מנחם</td>
              <td data-title="שם משפחה">צוקרמן</td>
              <td data-title="גיל">72</td>
              <td data-title="מין">זכר</td>
              <td data-title="דחיפות">קל</td>
              <td data-title="סוגי דימות">CT</td>
              <td data-title="שעה">10:40</td>
              <td data-title="תאריך">24.02.23</td>
              <td class="left-arrow" data-title="כניסה"><a href="patientProfile.html?patientId=12"><i
                    class="bi bi-chevron-left"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                  </svg></a>
              </td>
            </tr>

            <tr>
              <td class="list-icons"><i class="bi bi-x-circle-fill"></i> <svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                  <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                </svg>
              </td>
              <td class="list-icons"><i class="bi bi-pencil"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path
                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
              </td>
              <td data-title="מספר">C17</td>
              <td data-title="שם פרטי">אפרת</td>
              <td data-title="שם משפחה">גוש</td>
              <td data-title="גיל">44</td>
              <td data-title="מין">נקבה</td>
              <td data-title="דחיפות">קל</td>
              <td data-title="סוגי דימות">CT</td>
              <td data-title="שעה">11:00</td>
              <td data-title="תאריך">24.02.23</td>
              <td class="left-arrow" data-title="כניסה"><a href="patientProfile.html?patientId=13"><i
                    class="bi bi-chevron-left"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                  </svg></a>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </section>
  </main>
  <script src="js/script.js"></script>
</body>

</html>