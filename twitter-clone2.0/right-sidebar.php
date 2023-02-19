<div class="right_sidebar">
  <div class="search-container">
    <a href="#" class="search-btn">
      <i class="fa fa-search"></i>
    </a>
    <input type="text" name="search" placeholder="Search Twitter" class="search-input">
  </div>
  <div class="trends_container">
    <div class="trends_box">
      <div class="trends_header">
        <p>Trends for you</p>
        <i class="fa fa-cog"></i>
      </div>
      <div class="trends_body">
        <div class="trend">
          <span>Trending</span>
          <p>#Later....</p>
        </div>
        <div class="trend">
          <span>Trending</span>
          <p>#Later....</p>
        </div>
        <div class="trends_show-more">
          <a href="">Show more</a>
        </div>
      </div>

    </div>
    <div>
      <button class="button_sw" data-modal-target="#modal">Open info about site</button>
      <div class="modal" id="modal">
        <div class="modal-header">
          <div class="title">Info</div>
          <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
          На сайт можна залогінитись, написати простенький твіт від свого імені, видалити твіт(це я експерементував з базою даних адже щойно починаю її вивчати) відредагувати твіт(тільки останій запощений вами твіт, чому так ламаю голову 5 день), якщо ви захочете створити ще один акаунт всі пости будуть від імені цього нового акаунту(мабуть проблема в тому, що я поставив детект імені тобто логіну через парамент _SESSION('NAME')). З js працюю в перше, зробив простенький Popup. Це була дещо складна робота. You can log in to the site, write a simple tweet in your name, delete a tweet (I experimented with the database because I am just starting to learn it), edit a tweet (only the last tweet you posted, why am I puzzled for 5 days), if you want to create another account, all posts will be on behalf of this new account (probably the problem is that I set a name detector, that is, a login through the _SESSION('NAME') parameter). I'm working with js for the first time, I made a simple Popup.It was difficult work.
        </div>
      </div>
      <div id="overlay"></div>
    </div>
  </div>
</div>