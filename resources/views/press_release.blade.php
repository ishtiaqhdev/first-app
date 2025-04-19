<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Press & Publications</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .section-box {
      border: 1px solid #000;
      border-radius: 5px;
      padding: 10px 20px 10px 10px; /* Right padding added */
      margin-bottom: 16px;
      background-color: #fff;
      font-size: 13px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
      height: 100%; /* Allow equal height */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .btn-read {
      background-color: #3b2f86;
      color: white;
      font-size: 12px;
      border-radius: 6px;
      padding: 5px 12px;
      border: none;
      align-self: start;
    }

    .btn-read:hover {
      background-color: #2a2362;
    }

    h3 {
      font-size: 1.5rem;
      font-weight: bold;
    }

    li {
      margin-bottom: 5px;
    }
  </style>
</head>
<body class="bg-light">

  <div class="container py-4 px-4 px-md-5">
    <!-- PRESS SECTION -->
    <h3 class="text-center mb-4">PRESS</h3>
    <div class="row g-4">
      <div class="col-lg-5 col-md-6 mx-auto h-100">
        <div class="section-box">
          <div>
            <h5>PRESS RELEASE</h5>
            <ul class="list-unstyled">
              <li>• Visit of Military police officers to FIA HQ</li>
              <li>• Inauguration of Victim Reception Center, supported by Norway</li>
              <li>• International Anti-Corruption Day observed at FIA Academy 09.12.2021</li>
              <li>• Press Release – November 12, 2021</li>
              <li>• Visit of the Turkish delegation to FIA HQ</li>
            </ul>
          </div>
          <button class="btn btn-read mt-2" data-bs-toggle="modal" data-bs-target="#pressModal">
            Click to read all
          </button>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 mx-auto h-100">
        <div class="section-box">
          <div>
            <h5>IMMIGRATION</h5>
            <ul class="list-unstyled">
              <li>• List of Countries Eligible for Visa on Arrival</li>
              <li>• VISA POLICY FOR QATAR NATIONALS</li>
              <li>• TIP Report Questionnaire 2021-2022 (PDF)</li>
              <li>• TIP Report Questionnaire 2021-2022 (Word)</li>
              <li>• Annual HTMS Report 2020</li>
              <li>• Annual HTMS Report 2016 and 2017</li>
            </ul>
          </div>
          <button class="btn btn-read mt-2" data-bs-toggle="modal" data-bs-target="#immigrationModal">
            Click to read all
          </button>
          
        </div>
      </div>
    </div>

    <!-- PUBLICATIONS SECTION -->
    <h3 class="text-center my-4">PUBLICATIONS</h3>
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 h-100">
        <div class="section-box">
          <div>
            <h5>PUBLICATIONS</h5>
            <ul class="list-unstyled">
              <li>• Show cause notice to Mr. Farhan Mukhtar – 08-04-2025</li>
              <li>• Proceedings Against Muhammad Asif Iqbal (IBMS-FIA)</li>
              <li>• Notice to Ms. Mazio Shaheen – 28-02-2025</li>
              <li>• Notice to Muhammad Ali – 18/02/2025</li>
              <li>• Notice with enquiry against Mr. Shahid Imran – 07-02-2024</li>
              <li>• FIA Performance 2024</li>
            </ul>
          </div>
          <button class="btn btn-read mt-2" data-bs-toggle="modal" data-bs-target="#publicationsModal">
            Click to read all
          </button>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Press Release -->
  <div class="modal fade" id="pressModal" tabindex="-1" aria-labelledby="pressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pressModalLabel">All Press Releases</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-unstyled">
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Visit of Military police officers to FIA HQ</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Inauguration of Victim Reception and Facilitation Center, FIA, constructed with support from Norway</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">International Anti-Corruption Day observed at FIA Academy 09.12.2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Press Release – November 12, 2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Visit of the Turkish delegation to FIA HQ</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Press Release – November 10, 2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Press Release – November 9, 2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">ایف آئی اے ساوتھ زون پریس ریلیز</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">DG FIA visits NRTC Haripur</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Press Release – October 15, 2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Press Release – October 14, 2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">FIA Launches Booklet on Cyber Crime Risks</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Inauguration of Case Management System (CMS)</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Press Release – September 8, 2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">DG FIA chaired International Training Partners Conference</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">DG FIA in Interpol Meeting on Afghan Smuggling</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Performance of FIA – August 2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Merit & Transparency in FIA Recruitment</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Meeting with NUST NCSAEL – 31-08-2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Address to IOs at FIA Academy</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Press Release – 20.08.2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">INTERPOL platform facilitation urged</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">International cooperation with Provincial Police</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Progress Review – PSDP Projects</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Performance of Commercial Banking Circles</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Inauguration of Moodle Training Platform</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Meeting with NCCS Air University</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Performance of FIA – July 2021</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Police Martyrs' Day Observance</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Cyber Crime Performance Review</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Address to Deputy Directors & Assistant Directors</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Performance review – Sindh Zone-I</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Performance review – Balochistan</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">HEADs OF NCBs-INTERPOL CONFERENCE</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">FIA to become high-tech organization</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Performance review – Islamabad Zone</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Performance review – Punjab Zone-II</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Performance review – Punjab Zone-I</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Cyber Crime Wing brief on Cyber Security</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Operationalize new immigration check posts</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Cyber circles to improve performance</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">IPR wing performance directives</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Performance on the anti-corruption drive</a></li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Immigration -->
<div class="modal fade" id="immigrationModal" tabindex="-1" aria-labelledby="immigrationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="immigrationModalLabel">All Immigration Documents</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-unstyled">
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">List of Countries Eligible for Visa on Arrival</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">VISA POLICY FOR QATAR NATIONALS</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">TIP Report Questionnaire 2021-2022 (PDF)</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">TIP Report Questionnaire 2021-2022 (Word)</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Annual HTMS Report 2020</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Annual HTMS Report 2016 and 2017</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Annual HTMS Report 2015</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Annual HTMS Report 2014</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">National Action Plan of Human Trafficking and Migrant Smuggling (2021–2025)</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">HTMS Newsletter July–September 2020</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">HTMS Newsletter January–June 2020</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Quarterly HTMS Newsletter Issue 9</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Quarterly HTMS Newsletter Issue 8</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Quarterly HTMS Newsletter Issue 7</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Quarterly HTMS Newsletter Issue 6</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Quarterly HTMS Newsletter Issue 5</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Quarterly HTMS Newsletter Issue 4</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Quarterly HTMS Newsletter Issue 3</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Quarterly HTMS Newsletter Issue 2</a></li>
            <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Quarterly HTMS Newsletter Issue 1</a></li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Publications -->
<div class="modal fade" id="publicationsModal" tabindex="-1" aria-labelledby="publicationsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="publicationsModalLabel">All Publications</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-unstyled">
            <ul class="doc-list">
                <li><a href="{{ asset('pdfs/crime.pdf') }}"  target="_blank">Final show cause notice to Mr.Farhan Mukhtar</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"  target="_blank">Departmental Proceedings Against Muhammad Asif Iqbal</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"  target="_blank">Final show Cause Notice to Ms Nazia Shaheen</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"  target="_blank">Final show case notice to Muhammad Ali</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Final show cause notice for Shahid Imran</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">FIA Performance 2024</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Final show cause notice to Mr.Suleman Liaqat</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Show Cause Notice: Muhammad Afzal</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Departmental proceedings: Sheroze Sohail</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Final show Cause Notice: Muhammad Uzair</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Order of Inquiry: Muhammad Ali</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Departmental proceeding: Shahab Ahmed</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Charge Sheet: Sharjeel Siddique</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Show cause: Mr.Talha Asghar</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Personal Hearing before Director HRM</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Show Cause Notice: Junaid Ahmed Khan</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">FIA SPECTRUM Jan-Jun 2024</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">PROVISIONAL SENIORITY LIST: SUPERINTENDENTS</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Show Cause: Shehroze Sohail</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">FIA SPECTRUM Jan-Mar 2024</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">LIST OF SHORTLISTED CANDIDATES - IBMS Project</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">FINAL SENIORITY LIST OF ASIs</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Final Seniority List LDC (03.04.2024)</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Final Seniority List UDCs (03.04.2024)</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Final Seniority List Assistants (03.04.2024)</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Departmental Proceeding: Rana Obaid Minhas</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">PROVISIONAL SENIORITY LIST OF LDCs</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">PROVISIONAL SENIORITY LIST OF UDCS</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">PROVISIONAL SENIORITY LIST OF STENOTYPISTS</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">PROVISIONAL SENIORITY LIST OF ASSISTANT</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Provisional Seniority List of Constable</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Provisional Seniority List of Head Constable</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">PROVISIONAL SENIORITY LIST OF ASIs (Dec 2023)</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Compliance Report - Shazia vs DG FIA</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Charge Sheet: Syed Atif Hassan</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Order of ICS & SOA: Raheel Raza</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Updated Seniority List: Inspectors (Investigation)</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Proceedings: Khurram Yousaf</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Show Cause: Syed Waqar (Naib Qasid)</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">PROVISIONAL SENIORITY LIST OF SUB-INSPECTORS</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Seniority List of Head Constables (14-07-2022)</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Show Cause: Gulzar Ahmed</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Constables Promoted to Head Constables</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Provisional Seniority List Of Constables</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Seniority List: Lower Division Clerk</a></li>
                <li><a href="docs/seniority-udc.pdf" target="_blank">Seniority List: Upper Division Clerk</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Seniority List: Assistant</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">SENIORITY LIST OF ADDL.DIRECTORS GENERAL</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">SENIORITY LIST OF DEPUTY DIRECTOR</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">SENIORITY LIST OF ASSISTANT DIRECTOR</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">SENIORITY LIST OF ASSISTANT PRIVATE SECRETARY</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Attention: Rawalpindi & Islamabad Candidates</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">21 Head Constables Promoted to ASI</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Internship Program</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Seniority List: Head Constables (13.10.2021)</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Final Show Cause Notice: Ms.Asma Khan</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Guidelines for Cyber User</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Policy for Posting at Link Offices</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Rules: Inquiries and Investigations 2002</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Red Book 2023 – High Profile Terrorists</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}"target="_blank">Red Book 2023 – Human Traffickers</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Security Guide for Facebook User</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">INTERPOL & Notices Procedure Booklet</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Advisory: Cyber Crime during Corona</a></li>
                <li><a href="{{ asset('pdfs/crime.pdf') }}" target="_blank">Advisory for Parents and Children (Corona)</a></li>
                <li><a href=""{{ asset('pdfs/crime.pdf') }}" target="_blank">Advisory: Social Media Hacking Threats</a></li>
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

</html>
