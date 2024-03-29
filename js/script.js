window.onload = function () {
  if (window.location.pathname.includes("appointment.php")) {
    (() => {
      "use strict";
      const forms = document.querySelectorAll(".needs-validation");
      Array.from(forms).forEach((form) => {
        form.addEventListener(
          "submit",
          (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();

    let ageSelect = document.getElementById("age-select");
    for (var i = 0; i <= 100; i++) {
      var option = document.createElement("option");
      option.value = i;
      option.textContent = i;
      ageSelect.appendChild(option);
    }
    document.getElementById("dateInput").min = new Date().toISOString().split("T")[0];

    const submitButton = document.getElementById("submit-button");
    const inputs = Array.from(document.getElementsByClassName("written"));

    inputs.forEach(input => {
      input.addEventListener("input", () => {
        const isFormValid = inputs.every(input => input.value.trim() !== "");
        submitButton.disabled = !isFormValid;
        submitButton.style.backgroundColor = isFormValid ? "#5BC0DE" : "";
        submitButton.style.color = isFormValid ? "#000" : "";
      });
    });

    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');
    const failure = urlParams.get('failure');
    const date = urlParams.get('date');
    const time = urlParams.get('time');

    $(document).ready(function () {
      if (success === 'true') {
        $('#appointment-modal-error').hide();
        $('#appointment-error-message').hide(); 
        $('#appointment-modal-check').show(); 
        $('.appointment-divider-line').show()
        $('#appointment-modal-body-second-part').show();
        $('#appointment-modal-body-third-part').show();
        $('#appointment-success-message').show();
        $('#appointment-modal-calendar').after('<span>' + date + '</span>');
        $('#appointment-modal-clock').after('<span>' + time + '</span>');
        $('#successModal').modal('show');
      } else if (failure === 'true') {
        $('#appointment-modal-error').show(); 
        $('#appointment-error-message').show();
        $('#appointment-success-message').hide();
        $('#appointment-modal-check').hide(); 
        $('#appointment-modal-body-second-part').hide();
        $('#appointment-modal-body-third-part').hide();
        $('.appointment-divider-line').hide();
        $('#successModal').modal('show'); 
      }
    });
  } else if (window.location.pathname.includes('/patientProfile.php')) {
    
    const saveButton = document.getElementById('save-info-profile-changes');
    const messageOverlay = document.getElementById('message-overlay');
    const messageText = document.getElementById('message-text');

    saveButton.addEventListener("click", function () {
      messageOverlay.style.display = "block";
      messageText.textContent = "נשמר בהצלחה";
      setTimeout(function () {
        messageOverlay.style.display = "none";
      }, 2000);
    });

    fetch("data/medicalHistory.json")
      .then(response => response.json())
      .then(data => {
        var ulElement = document.querySelector("#medical-history-tab-pane ul");
        var desiredId = document.querySelector('[data-title="תעודת זהות"]').textContent;

        for (var i = 0; i < data.patients.length; i++) {
          if (data.patients[i].id === desiredId) {
            for (var prop in data.patients[i]) {
              if (prop !== "id") {
                var liEvent = document.createElement("li");
                liEvent.textContent = prop + ": " + data.patients[i][prop];
                ulElement.appendChild(liEvent);
              }
            }
            break;
          }
        }
      });

  } else if (window.location.pathname.includes("/list.php")) {
    new DataTable('#example', {
      ordering: false,
      paging: false,
      language: {
        searchPlaceholder: "חיפוש",
        search: "",
      },
    });
    var deleteButtons = document.querySelectorAll('button[data-bs-target="#deleteModal"]');
    deleteButtons.forEach(function (button) {
      button.onclick = function () {
        var deleteId = this.getAttribute("data-person-id");
        document.getElementById("delete_id").value = deleteId;
      };
    });
    $(document).ready(function () {
      $('.editbtn').on('click', function () {

        $('#updateModal').modal('show');

        $tr = $(this).closest('tr');

        let data = $tr.children("td").map(function () {
          return $(this).text();
        }).get();

        console.log(data);

        $('#update_id').val(data[2]);
        $('#first_name').val(data[3]);
        $('#last_name').val(data[4]);
        $('#age').val(data[5]);
        $('#gender').val(data[6]);
        $('#urgency').val(data[7]);
        $('#image_type').val(data[8]);
        $('#time').val(data[9]);
        $('#date').val(data[10]);

      });

    });



  } else if (window.location.pathname.includes("/dashboard.php")) {

    const ctx = document.getElementById("myChart");
    const chartcol = document.getElementById("chart-col");

    new Chart(ctx, {
      type: "doughnut",
      data: {
        labels: [
          "CT - ממתינים ל ",
          "MRI - ממתינים ל ",
          "ממתינים לרנגטן",
          "ממתינים לאולטרסאונד",
        ],
        datasets: [
          {
            label: "ממתינים",
            data: [12, 19, 3, 5],
            backgroundColor: [
              "rgb(134, 185, 206)",
              "rgb(156, 203, 225)",
              "rgb(217, 147, 227)",
              "rgb(164, 138, 207)",
            ],

            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        resizeDelay: 0.5,


      },
    });

    new Chart(chartcol, {
      type: "bar",
      data: {
        labels: ["ציוד סטרילי", "מחטים", "חומר ניגוד", "כפפות", "גל", "מסיכות"],
        datasets: [
          {
            label: "מחלקת דימות",
            data: [15, 25, 50, 75, 100, 90],
            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        resizeDelay: 0.5,

      },
    });


    const chartload = document.getElementById("myChartload");
    new Chart(chartload, {
      type: "line",
      data: {
        labels: [" 6:00", "7:00", "8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00"],
        datasets: [
          {
            label: "מחלקת דימות",
            data: [15, 25, 50, 75, 100, 90, 100, 100, 100, 85, 70, 60, 90],
            borderWidth: 2,
          }, {
            label: " עומס כבד  ",

            data: [85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85],
            borderWidth: 2,
          }, {
            label: " עומס קל  ",

            data: [60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60],
            borderWidth: 2,

          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        resizeDelay: 0.5,

      },
    });
    function generateCalendarDays(year, month) {
      const daysContainer = document.getElementById("calendar-days");
      const currentMonthElement = document.getElementById("current-month");

      const firstDayOfMonth = new Date(year, month, 1).getDay();
      const totalDaysInMonth = new Date(year, month + 1, 0).getDate();
      daysContainer.innerHTML = "";
      currentMonthElement.textContent = new Date(year, month).toLocaleString(
        "default",
        { month: "long", year: "numeric" }
      );
      for (let i = 0; i < firstDayOfMonth; i++) {
        const emptyCell = document.createElement("div");
        emptyCell.classList.add("empty-cell");
        daysContainer.appendChild(emptyCell);
      }
      for (let day = 1; day <= totalDaysInMonth; day++) {
        const dayCell = document.createElement("div");
        dayCell.textContent = day;
        dayCell.classList.add("day-cell");
        daysContainer.appendChild(dayCell);
      }
    }
    const currentDate = new Date();
    generateCalendarDays(currentDate.getFullYear(), currentDate.getMonth());
    document.getElementById("prevBtn").addEventListener("click", () => {
      const currentMonth = currentDate.getMonth();
      const currentYear = currentDate.getFullYear();
      currentDate.setMonth(currentMonth - 1);
      if (currentMonth === 0) {
        currentDate.setFullYear(currentYear - 1);
      }

      generateCalendarDays(currentDate.getFullYear(), currentDate.getMonth());
    });

    document.getElementById("nextBtn").addEventListener("click", () => {
      const currentMonth = currentDate.getMonth();
      const currentYear = currentDate.getFullYear();

      currentDate.setMonth(currentMonth + 1);

      // Check if we need to switch years
      if (currentMonth === 11) {
        currentDate.setFullYear(currentYear + 1);
      }

      generateCalendarDays(currentDate.getFullYear(), currentDate.getMonth());
    });
function updateCurrentDayCell(year, month) {
  const daysContainer = document.getElementById("calendar-days");
  const dayCells = daysContainer.getElementsByClassName("day-cell");


  const currentDate = new Date();
  const currentYear = currentDate.getFullYear();
  const currentMonth = currentDate.getMonth();
  const currentDay = currentDate.getDate();

  for (let i = 0; i < dayCells.length; i++) {
    const dayCell = dayCells[i];
    const cellYear = year;
    const cellMonth = month;
    const cellDay = parseInt(dayCell.textContent);

    if (cellYear === currentYear && cellMonth === currentMonth && cellDay === currentDay) {
      dayCell.classList.add("current-day");
    } else {
      dayCell.classList.remove("current-day");
    }
  }
}

function generateCalendarDays(year, month) {
  const daysContainer = document.getElementById("calendar-days");
  const currentMonthElement = document.getElementById("current-month");

  const firstDayOfMonth = new Date(year, month, 1).getDay();
  const totalDaysInMonth = new Date(year, month + 1, 0).getDate();

  daysContainer.innerHTML = "";

  currentMonthElement.textContent = new Date(year, month).toLocaleString(
    "default",
    { month: "long", year: "numeric" }
  );

  for (let i = 0; i < firstDayOfMonth; i++) {
    const emptyCell = document.createElement("div");
    emptyCell.classList.add("empty-cell");
    daysContainer.appendChild(emptyCell);
  }

  for (let day = 1; day <= totalDaysInMonth; day++) {
    const dayCell = document.createElement("div");
    dayCell.textContent = day;
    dayCell.classList.add("day-cell");
    daysContainer.appendChild(dayCell);
  }

  updateCurrentDayCell(year, month);
}


    const taskInput = document.getElementById("taskInput");
    const addButton = document.getElementById("addButton");
    const taskList = document.getElementById("taskList");

    addButton.addEventListener("click", addTask);

    function addTask() {
      if (taskInput.value.trim() !== "") {
        const taskItemWrapper = document.createElement("div");
        taskItemWrapper.classList.add("task-item-wrapper");

        const taskItem = document.createElement("li");
        taskItem.innerHTML = `<span>${taskInput.value}</span> `;
        const deleteButton = document.createElement("button");
        deleteButton.innerText = "מחיקה";
        deleteButton.classList.add("delete-button");

        taskItemWrapper.appendChild(taskItem);
        taskItemWrapper.appendChild(deleteButton);
        taskList.appendChild(taskItemWrapper);

        taskInput.value = "";
        addDeleteEventListener(taskItemWrapper);
      }
    }

    function deleteTask() {
      const taskItemWrapper = this.parentNode;
      taskItemWrapper.parentNode.removeChild(taskItemWrapper);
    }

    function addDeleteEventListener(taskItemWrapper) {
      const deleteButton = taskItemWrapper.querySelector(".delete-button");
      deleteButton.addEventListener("click", deleteTask);
    }

    const saveButton = document.getElementById('dashboard-box-mobile-savebutton');
    const messageOverlay = document.getElementById('message-overlay');
    const messageText = document.getElementById('message-text');

    saveButton.addEventListener("click", function () {

      messageOverlay.style.display = "block";

      messageText.textContent = "ההתראה נשלחה בהצלחה";

      setTimeout(function () {
        messageOverlay.style.display = "none";
      }, 2000);
    });



    let alertFlag = 0;
    const rows = document.querySelectorAll(".colored-row");
    for (let i = 0; i < rows.length; i++) {
      const tds = rows[i].querySelectorAll(".color-according"); 
      const current = parseInt(tds[3].textContent); 
      const capacity = parseInt(tds[2].textContent); 

      if ((current - capacity) > 10) {
        for (let j = 0; j < tds.length; j++) {
          tds[j].classList.add("tbl-color-dashboard-red");
        }
      } else if ((current - capacity) >= 0) {
        alertFlag = 1;
        for (let j = 0; j < tds.length; j++) {
          tds[j].classList.add("tbl-color-dashboard-orange");
        }
      } else {
        for (let j = 0; j < tds.length; j++) {
          tds[j].classList.add("tbl-color-dashboard");
        }
      }
    }
    
    function insertContent() {
      if (alertFlag === 1) {
        const h4Container = document.getElementById('h4Container');
        h4Container.innerHTML = `
              <div>
                  <h4>הודעת מערכת</h4>
              </div>
              <div>
                  <h4> עומס קל במחלקת דימות </h4>
              </div>
              <div>
                  <h4> 9:30</h4>
              </div>
          `;

        
        fetch("data/messages.json")
          .then(response => response.json())
          .then(data => {
            const messages = data.data;

            const messagesHTML = messages.map(message => `<p>${message}</p>`).join('');

            const modalBody = document.getElementById('dashboard-modal-body');
            modalBody.innerHTML = messagesHTML;
          })
          .catch(error => console.error("Error fetching JSON:", error));
      }
    }

    insertContent();



  } else if (window.location.pathname.includes("/addUsers.php")) {

    (() => {
      "use strict";
      const forms = document.querySelectorAll(".needs-validation");

      Array.from(forms).forEach((form) => {
        form.addEventListener(
          "submit",
          (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();

    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');

    if (success === 'true') {
      $(document).ready(function () {
        $('#successModal').modal('show');
      });
    }

  }
};
