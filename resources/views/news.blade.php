<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>News Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .news-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .news-img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }
    .news-source {
      background-color: #1a1a6c;
      color: white;
      padding: 6px 0;
      font-weight: bold;
      font-size: 14px;
    }
    .news-date {
      background-color: #1a1a6c;
      color: white;
      padding: 4px 0;
      font-size: 13px;
    }
  </style>
</head>
<body class="p-4">

  <h4 class="text-center mb-4"><strong>NEWS</strong></h4>

  <div class="container">
    <div class="row g-3">
      
      <!-- Row 1 -->
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-06-03</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/jang.png') }}" alt="News" class="news-img">
          <div class="news-source">Jang News</div>
          <div class="news-date">2022-06-01</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/dunya.png') }}" alt="News" class="news-img">
          <div class="news-source">Dunya News</div>
          <div class="news-date">2022-05-24</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/dunya.png') }}" alt="News" class="news-img">
          <div class="news-source">Dunya News</div>
          <div class="news-date">2022-05-23</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/jang.png') }}" alt="News" class="news-img">
          <div class="news-source">Jang News</div>
          <div class="news-date">2022-05-21</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">News</div>
          <div class="news-date">2022-05-26</div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/jang.png') }}" alt="News" class="news-img">
          <div class="news-source">Jang News</div>
          <div class="news-date">2022-05-20</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/dunya.png') }}" alt="News" class="news-img">
          <div class="news-source">Dunya News</div>
          <div class="news-date">2022-05-19</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/jang.png') }}" alt="News" class="news-img">
          <div class="news-source">Jang News</div>
          <div class="news-date">2022-05-18</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-05-17</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/jang.png') }}" alt="News" class="news-img">
          <div class="news-source">Jang News</div>
          <div class="news-date">2022-05-16</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/dunya.png') }}" alt="News" class="news-img">
          <div class="news-source">Dunya News</div>
          <div class="news-date">2022-05-15</div>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/dunya.png') }}" alt="News" class="news-img">
          <div class="news-source">Dunya News</div>
          <div class="news-date">2022-05-14</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/jang.png') }}" alt="News" class="news-img">
          <div class="news-source">Jang News</div>
          <div class="news-date">2022-05-13</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/jang.png') }}" alt="News" class="news-img">
          <div class="news-source">JANG NEWS</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>

      <!-- Row 4 -->
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/dunya.png') }}" alt="News" class="news-img">
          <div class="news-source">DUNYA NEWS</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/express.png') }}" alt="News" class="news-img">
          <div class="news-source">Express News</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-6">
        <div class="news-card">
          <img src="{{ asset('assets/jang.png') }}" alt="News" class="news-img">
          <div class="news-source">JANG NEWS</div>
          <div class="news-date">2022-05-12</div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

