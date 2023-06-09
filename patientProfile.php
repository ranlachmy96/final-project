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
  <title>profile patients</title>
</head>

<body id="body-patientProfile">
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
          <a class="nav-link" aria-current="page" href="#">לוח בקרה </a>
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
    <nav class="breadcrumb-right" style="--bs-breadcrumb-divider: '<';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">פרופיל מטופל</li>
        <li class="breadcrumb-item"><a href="index.html">רשימת מטופלים</a></li>

      </ol>
    </nav>


    <section id="profileWrapper">
      <section class="flex-title">
        <section class="title-patientProfile">
          <section class="text-in-title">
            <h5>פרופיל מטופל</h5>
          </section>
        </section>
      </section>
      <section class="visible-table">
        <section class="flex-table">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">תז</th>
                <th scope="col">מין</th>
                <th scope="col">גיל </th>
                <th scope="col">שם משפחה</th>
                <th scope="col">שם פרטי</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>205165488</td>
                <td>נקבה</td>
                <td>32</td>
                <td>ניסמוב</td>
                <td>איילת</td>
              </tr>
          </table>
        </section>
      </section>
      <section class="info-profile">
        <section class="info-profile-tabs">
          <ul class="nav nav-tabs nav-bar-2 nav-fill my-info-profile-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active Medical-information-tab" data-bs-toggle="tab"
                data-bs-target="#Medical-information-tab-pane" type="button" role="tab">מידע רפואי נוכחי</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link virtual-assistant-tab" data-bs-toggle="tab"
                data-bs-target="#virtual-assistant-tab-pane" type="button" role="tab">עוזר וירטואלי</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="medical-history-tab" data-bs-toggle="tab"
                data-bs-target="#medical-history-tab-pane" type="button" role="tab">היסטוריה רפואית </button>
            </li>
          </ul>

        </section>
        <!-- mobile -->
        <section class="mobile-patient-profil-section1">
          <section class="title-name-pateint-mobile">
            <h5 class="name-visible-responsive">שם: איילת ניסמוב</h5>
          </section>
          <section class="flex-mobile-warpper">
            <section class="warpper-inside-blue-section1">
              <h6>דחיפות רפואית</h6>
              <div class="form-condtion">
                <select name="image_type" class="form-select" required>
                  <option value="">-</option>
                  <option value="easy">קל</option>
                  <option value="medium">בינוני</option>
                  <option value="Hard">קשה</option>
                </select>
              </div>
            </section>
            <label>הערות</label>
            <textarea class="form-control" name="moreToAdd"></textarea>
            <a class="a-history" href="#">צפייה בהיסטוריה רפואית</a>
          </section>
        </section>

        <section class="visible-tab-mobile">
          <section class="info-profile-tabs">
            <ul class="nav nav-tabs nav-bar-2 nav-fill my-info-profile-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active Medical-information-tab" data-bs-toggle="tab"
                  data-bs-target="#Medical-information-tab-pane" type="button" role="tab">חדש</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link virtual-assistant-tab" data-bs-toggle="tab"
                  data-bs-target="#virtual-assistant-tab-pane" type="button" role="tab">תבנית מוכנה</button>
              </li>
            </ul>
          </section>

          <section class="tab2-mobile">
            <section class="icon-patient">
              <div class="icon1">
                <i class="bi bi-plus-lg"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                  viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>
                <p>הוספה</p>
              </div>

              <div class="icon2">
                <i class="bi bi-check-lg"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-check-lg" viewBox="0 0 16 16">
                  <path
                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                </svg>
                <p>שמור תבנית</p>
              </div>

            </section>
            <section class="note-tab2">
              <label>הערות</label>
              <textarea class="form-control" name="moreToAdd"></textarea>
            </section>
          </section>
          <section class="select-responsiblity">
            <h6>באחריות מחלקת</h6>
            <div class="form-condtion">
              <select name="image_type" class="form-select" required>
                <option value="">-</option>
                <option value="easy">מיון</option>
                <option value="medium">דימות</option>
                <option value="Hard">פיזותרפיה</option>
              </select>
            </div>
          </section>
        </section>
        <!-- mobile -->
        <section id="info-profile-content">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Medical-information-tab-pane" role="tabpanel" tabindex="0">
              <div id="Medical-information-tab-pane-upper-part">
                <h5>תור עכשוי</h5>
                <span>מחלקת דימות</span>
              </div>
              <div class="divider"></div>
              <div id="Medical-information-tab-pane-lower-part">
                <div id="Medical-information-tab-pane-lower-part-right-side">
                  <label>סיבת הגעה</label>
                  <textarea class="form-control"></textarea>
                </div>
                <div id="Medical-information-tab-pane-lower-part-left-side">
                  <label>המלצות לטיפול</label>

                  <div id="Medical-information-tab-pane-lower-part-left-side-container">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckone">
                      <label class="form-check-label" for="flexCheckone">
                        C.T
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckTwo">
                      <label class="form-check-label" for="flexCheckTwo">
                        M.R.I
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckThree">
                      <label class="form-check-label" for="flexCheckThree">
                        X-RAY
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckFour">
                      <label class="form-check-label" for="flexCheckFour">
                        ULTRA-SOUND
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="virtual-assistant-tab-pane" role="tabpanel" tabindex="0">
              <div id="virtual-assistant-tab-pane-container">
                <ul>
                  <li>לא קיים</li>
                </ul>
              </div>
              <div id="virtual-assistant-tab-pane-button-container">
                <button id="virtual-assistant-tab-pane-button">יישום פעולות</button>
              </div>
            </div>
            <div class="tab-pane fade" id="medical-history-tab-pane" role="tabpanel" tabindex="0">
              <ul>
                <li>בריאה ופעילה עם מצב רפואי כללי טוב</li>
                <li>סבלה בעבר מבוהן נפוחה</li>
                <li>לא יודע על עבר רפואי גנטי</li>
              </ul>
            </div>
          </div>
        </section>
        <section id="save-info-profile-changes-container">
          <button id="save-info-profile-changes">
            שמור
          </button>
          <!-- check -->
          <div id="message-overlay">
            <div id="message-box">
              <span id="message-text"></span>
              <i class="bi bi-check-lg"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg"
                viewBox="0 0 16 16">
                <path
                  d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
              </svg>
            </div>
          </div>
        </section>
      </section>
    </section>
  </main>
  <script src="js/script.js"></script>
</body>

</html>