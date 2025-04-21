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
      padding: 20px 0;
    }

    h1 {
      text-align: center;
      font-size: 1.75rem;
      margin-bottom: 0.5rem;
    }

    .instruction {
      text-align: center;
      font-size: 0.875rem;
      margin-bottom: 1.5rem;
      color: #555;
    }

    .section-title {
      text-align: center;
      font-weight: bold;
      font-size: 1.25rem;
      margin-bottom: 1.5rem;
      padding: 0.5rem 0;
      background-color: #f8f9fa;
      border-radius: 0.25rem;
    }

    .tender-card {
      border: 1px solid #dee2e6;
      border-radius: 0.375rem;
      padding: 0.75rem;
      margin-bottom: 1.5rem;
      height: 100%;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      transition: transform 0.2s ease-in-out;
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .tender-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .tender-title {
      font-size: 0.9rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 0.75rem;
      line-height: 1.4;
    }

    .tender-info {
      font-size: 0.875rem;
      line-height: 1.5;
      flex-grow: 1;
    }

    .tender-info span {
      font-weight: bold;
    }

    .tender-info p {
      margin-bottom: 0.5rem;
    }

    /* Button container to ensure consistent alignment */
    .button-container {
      margin-top: auto;
      width: 100%;
    }

    /* Standard button styling */
    .download-btn {
      background-color: #0d6efd;
      color: white;
      padding: 0.75rem 1rem;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      font-size: 0.875rem;
      display: block;
      width: 100%;
      transition: background-color 0.15s ease-in-out;
    }

    .download-btn:hover {
      background-color: #0b5ed7;
    }

    @media (max-width: 767.98px) {
      .download-btn {
        padding: 0.5rem 0.8rem; /* Slightly smaller padding for smaller screens */
        font-size: 0.75rem; /* Smaller font size */
      }
    }

    @media (max-width: 300px) {
      .download-btn {
        font-size: 0.75rem;
        padding: 0.4rem 0.6rem;
      }
    }

  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        <h1 class="mt-3 mb-2">TENDERS</h1>
        <p class="instruction mb-4">Please Click on download button to view the tender details.</p>

        <div class="section rounded shadow-sm p-3 mb-4">
          <p class="section-title mb-3">OPEN TENDERS</p>
          <div class="alert alert-info text-center">No open tenders available at this time.</div>
        </div>

        <div class="section rounded shadow-sm p-3 mb-4">
          <p class="section-title mb-3">CLOSED TENDERS</p>
          <div class="row g-3">
            
            <!-- Tender 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">TENDER NO: PLA/CW/0334/2024-25 (EXTENSION)</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2025-04-24</p>
                  <p><span>Last Date:</span> 2025-05-07</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tender 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">FINAL EVALUATION REPORT OF TENDER NO. 12/2023/24 REGARDING PROCUREMENT OF COMPUTER, STATIONERY & MISCELLANEOUS ITEMS</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2024-12-15</p>
                  <p><span>Last Date:</span> 2025-01-05</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tender 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">FINAL EVALUATION REPORT OF TENDER NO. 12/2023/24 REGARDING PROCUREMENT OF COMPUTER/PRINTER</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2024-12-15</p>
                  <p><span>Last Date:</span> 2025-01-05</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tender 4 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">FINAL EVALUATION REPORT OF TENDER NO. 15/2023/24</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2023-08-29</p>
                  <p><span>Last Date:</span> 2023-09-17</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tender 5 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">TECHNICAL EVALUATION REPORT TENDER NO 15/2023/24</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2023-08-15</p>
                  <p><span>Last Date:</span> 2023-08-28</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tender 6 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">BDING DOCUMENT FOR MACHINERY, HARDWARE, FURNITURE AND FIXTURE OFFICE EQUIPMENT, COMPUTERACCESSORIES ITEMS</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2023-08-22</p>
                  <p><span>Last Date:</span> 2023-09-05</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tender 7 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">REQUEST FOR PROPOSAL STATIONERY / COMPUTER ACCESSORIES ITEMS 2023-24</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2023-08-22</p>
                  <p><span>Last Date:</span> 2023-09-04</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tender 8 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">TENDER NOTICE REGARDING PURCHASE OF STATIONERY UNIFORM & MISCELLANEOUS ITEMS AND PROCUREMENT OF FURNITURE</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2023-08-12</p>
                  <p><span>Last Date:</span> 2023-09-05</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

            <!-- Tender 9 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="tender-card">
                <p class="tender-title">TENDER NOTICE REGARDING COMPUTER, STATIONERY, MISC. ITEMS MACHINERY HARDWARE</p>
                <div class="tender-info">
                  <p><span>Advertise Date:</span> 2023-08-22</p>
                  <p><span>Last Date:</span> 2023-09-05</p>
                </div>
                <div class="button-container">
                  <a href="{{ asset('pdfs/tenders.pdf') }}" target="_blank" class="text-decoration-none">
                    <button class="download-btn">Click to View/ Download</button>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>