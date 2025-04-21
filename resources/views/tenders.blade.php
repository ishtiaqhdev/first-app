<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tenders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
      font-size: 22px;
      margin-bottom: 5px;
    }

    .instruction {
      text-align: center;
      font-size: 12px;
      margin-bottom: 20px;
    }

    .section-title {
      text-align: center;
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 20px;
    }

    .tender-card {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 15px;
      margin-bottom: 20px;
      height: 100%;
    }

    .tender-title {
      font-size: 13px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }

    .tender-info {
      font-size: 12px;
      line-height: 1.4;
    }

    .tender-info span {
      font-weight: bold;
    }

    .download-btn {
      background-color: #00529b;
      color: white;
      padding: 6px 12px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 12px;
      display: block;
      margin: 10px auto 0;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>TENDERS</h1>
    <p class="instruction">Please Click on download button to view the tender details.</p>

    <div class="section border rounded p-3 mb-4">
      <p class="section-title">OPEN TENDERS</p>
      <!-- Add open tenders here if needed -->
    </div>

    <div class="section border rounded p-3">
      <p class="section-title">CLOSED TENDERS</p>
      <div class="row">
        
        <!-- Tender 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">TENDER NO: PLA/CW/0334/2024-25 (EXTENSION)</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2025-04-24</p>
              <p><span>Last Date:</span> 2025-05-07</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

        <!-- Tender 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">FINAL EVALUATION REPORT OF TENDER NO. 12/2023/24 REGARDING PROCUREMENT OF COMPUTER, STATIONERY & MISCELLANEOUS ITEMS</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2024-12-15</p>
              <p><span>Last Date:</span> 2025-01-05</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}"target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

        <!-- Tender 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">FINAL EVALUATION REPORT OF TENDER NO. 12/2023/24 REGARDING PROCUREMENT OF COMPUTER/PRINTER</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2024-12-15</p>
              <p><span>Last Date:</span> 2025-01-05</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

        <!-- Tender 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">FINAL EVALUATION REPORT OF TENDER NO. 15/2023/24</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2023-08-29</p>
              <p><span>Last Date:</span> 2023-09-17</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

        <!-- Tender 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">TECHNICAL EVALUATION REPORT TENDER NO 15/2023/24</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2023-08-15</p>
              <p><span>Last Date:</span> 2023-08-28</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

        <!-- Tender 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">BDING DOCUMENT FOR MACHINERY, HARDWARE, FURNITURE AND FIXTURE OFFICE EQUIPMENT, COMPUTERACCESSORIES ITEMS</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2023-08-22</p>
              <p><span>Last Date:</span> 2023-09-05</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

        <!-- Tender 7 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">REQUEST FOR PROPOSAL STATIONERY / COMPUTER ACCESSORIES ITEMS 2023-24</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2023-08-22</p>
              <p><span>Last Date:</span> 2023-09-04</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

        <!-- Tender 8 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">TENDER NOTICE REGARDING PURCHASE OF STATIONERY UNIFORM & MISCELLANEOUS ITEMS AND PROCUREMENT OF FURNITURE</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2023-08-12</p>
              <p><span>Last Date:</span> 2023-09-05</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

        <!-- Tender 9 -->
        <div class="col-md-6 col-lg-4">
          <div class="tender-card h-100">
            <p class="tender-title">TENDER NOTICE REGARDING COMPUTER, STATIONERY, MISC. ITEMS MACHINERY HARDWARE</p>
            <div class="tender-info">
              <p><span>Advertise Date:</span> 2023-08-22</p>
              <p><span>Last Date:</span> 2023-09-05</p>
            </div>
            <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank">
              <button class="download-btn">Click to View/ Download</button>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>