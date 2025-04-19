<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Information (RTI ACT 2017)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      margin: 0;
      background-color: #f9f9f9;
    }
    .main-title {
      text-align: center;
      margin: 25px 0;
      font-weight: bold;
      color: #17275c;
    }
    .info-card {
      height: 100%;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin-bottom: 20px;
      background-color: white;
    }
    .card-header {
      background-color: #f8f9fa;
      font-weight: bold;
      text-align: center;
      padding: 12px;
      border-bottom: 1px solid #ddd;
      border-radius: 8px 8px 0 0;
    }
    .card-body {
      padding: 20px;
    }
    .card-body ul {
      padding-left: 20px;
      margin-bottom: 15px;
    }
    .card-body li {
      margin-bottom: 8px;
    }
    .btn-container {
      text-align: center;
    }
    .read-all-btn {
      background-color: #17275c;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      text-decoration: none;
      display: inline-block;
      margin-top: 10px;
      font-size: 0.85rem;
      cursor: pointer;
      border: none;
    }
    .read-all-btn:hover {
      background-color: #0d1a3e;
    }
    .employee-link {
      color: #17275c;
      text-decoration: none;
    }
    .employee-link:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
      }
      .card-header {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="main-title">INFORMATION (RTI ACT 2017)</h1>

    <div class="row">
      <!-- FIA EMPLOYEES DIRECTORY -->
      <div class="col-md-6">
        <div class="info-card">
          <div class="card-header">FIA EMPLOYEES DIRECTORY</div>
          <div class="card-body">
            <ul>
              <li>Sindh Zone-II</li>
              <li>KPK Zone</li>
              <li>Internal ADD ECW, ADG LAW</li>
              <li>Intral ADW, AAS, Admn, AD/DAP CCRD</li>
              <li>DG, CCS, Director Admn, Director HRM</li>
            </ul>
            <div class="btn-container">
              <button class="read-all-btn" data-bs-toggle="modal" data-bs-target="#employeeModal">
                Click to read all
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- PUBLIC INFORMATION OFFICER -->
      <div class="col-md-6">
        <div class="info-card">
          <div class="card-header">PUBLIC INFORMATION OFFICER UNDER THE RIGHT OF ACCESS TO INFORMATION ACT, 2017</div>
          <div class="card-body">
            <ul>
              <li>RTI Request Form under Right of Access to Information Act 2017</li>
              <li>Schedule of Costs</li>
              <li>Notification of Public Information Officer</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- BUDGETS, SALARIES -->
      <div class="col-md-6">
        <div class="info-card">
          <div class="card-header">BUDGETS, SALARIES, PERKS AND PRIVILEGES</div>
          <div class="card-body">
            <ul>
              <li>Expenditure Statement for the FY 2021-22</li>
              <li>Expenditure Statement for the FY 2020-21</li>
              <li>Expenditure Statement for the FY 2019-20</li>
              <li>Salaries, Perks And Privileges</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- ENQUIRIES/CASES -->
      <div class="col-md-6">
        <div class="info-card">
          <div class="card-header">INFORMATION/DATA RELATED TO ENQUIRIES/CASES</div>
          <div class="card-body">
            <ul>
              <li>Annual Administrative Report 2023</li>
              <li>3rd Quarterly Bulletin Report 2023</li>
              <li>Cyber Crime Reporting Centre Faisalabad</li>
              <li>2nd Quarterly Bulletin Report 2023</li>
              <li>1st Quarterly Bulletin Report 2023</li>
              <li>Annual Administrative Report 2022</li>
            </ul>
            <div class="btn-container">
              <button class="read-all-btn" data-bs-toggle="modal" data-bs-target="#enquiriesModal">
                Click to read all
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Employees -->
  <div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content bg-white">
        <div class="modal-header">
          <h5 class="modal-title" id="employeeModalLabel">FIA Employees</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{{ asset('pdfs/SindhZone.pdf') }}" target="_blank" class="employee-link">Sindh Zone-II</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/KPK_Zone.pdf') }}" target="_blank" class="employee-link">KPK Zone</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/Interpol_ADG.pdf') }}" target="_blank" class="employee-link">Internal ADD ECW, ADG LAW</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/Immi_ACW.pdf') }}" target="_blank" class="employee-link">Intral ADW, AAS, Admn, AD/DAP CCRD</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/DG_COS.pdf') }}" target="_blank" class="employee-link">DG, CCS, Director Admn, Director HRM</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/Balochistan_Zone.pdf') }}" target="_blank" class="employee-link">Balochistan Zone</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/ADG_sindh.pdf') }}" target="_blank" class="employee-link">ADG (D) Sindh Zone-I</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/north.pdf') }}" target="_blank" class="employee-link">ADG FIA PZ-I, PZ-II</a>
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Enquiries -->
<div class="modal fade" id="enquiriesModal" tabindex="-1" aria-labelledby="enquiriesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content bg-white">
        <div class="modal-header">
          <h5 class="modal-title" id="enquiriesModalLabel">Information/ Data related to Enquiries/ Cases</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten.pdf') }}" target="_blank">Annual Administration Report 2023</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/admission.pdf') }}" target="_blank">3rd Quarterly Bulletin Report 2023</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/cyber_crime.pdf') }}" target="_blank">Cyber Crime Reporting Centre Faisalabad</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten2.pdf') }}" target="_blank">2nd Quarterly Bulletin Report 2023</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten3.pdf') }}" target="_blank">1st Quarterly Bulletin Report 2023</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten4.pdf') }}" target="_blank">Annual Administration Report 2022</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten5.pdf') }}" target="_blank">Annual Administration Report 2021</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten6.pdf') }}" target="_blank">Annual Administration Report 2020</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten7.pdf') }}" target="_blank">Annual Administration Report 2019</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten8.pdf') }}" target="_blank">Annual Administration Report 2018</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten9.pdf') }}" target="_blank">Cyber Crime HQ Islamabad</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten10.pdf') }}" target="_blank">Cyber Crime Reporting Centre SUKKUR</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten11.pdf') }}" target="_blank">Cyber Crime Reporting Centre Hyderabad</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten12.pdf') }}"target="_blank">Cyber Crime Reporting Centre Karachi</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten13.pdf') }}" target="_blank">Cyber Crime Reporting Centre Islamabad</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten14.pdf') }}" target="_blank">Cyber Crime Reporting Centre Abbottabad</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten15.pdf') }}" target="_blank">Cyber Crime Reporting Centre D.I.Khan</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten16.pdf') }}" target="_blank">Cyber Crime Reporting Centre Gilgit</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten17.pdf') }}" target="_blank">Cyber Crime Reporting Centre Peshawar</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten18.pdf') }}" target="_blank">Cyber Crime Reporting Centre QUETTA</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten19.pdf') }}" target="_blank">Cyber Crime Reporting Centre Rawalpindi</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten20.pdf') }}" target="_blank">Cyber Crime Reporting Centre Gujranwala</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten21.pdf') }}" target="_blank">Cyber Crime Reporting Centre Multan</a>
            </li>
            <li class="list-group-item">
              <a href="{{ asset('pdfs/bulleten22.pdf') }}" target="_blank">Cyber Crime Reporting Centre Lahore</a>
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
