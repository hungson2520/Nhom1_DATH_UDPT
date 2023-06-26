<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo HỆ QUẢN TRỊ CSDL HIỆN ĐẠI</title>
    <script
      src="https://kit.fontawesome.com/901acbd329.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav class="navigation">
      <ul class="nav_ul">
        <div class="nav_ul_left">
          <li><i class="fa-solid fa-bars"></i></li>
          <li>Test</li>
        </div>
        <div class="nav_ul_right">
          <li><i class="fa-solid fa-sun"></i></li>

          <li>ENV<i class="fa-sharp fa-solid fa-caret-down"></i></li>
          <li>PROJECTS</li>
          <li><i class="fa-solid fa-bars"></i></li>
          <li></li>
        </div>
      </ul>
    </nav>

    <div class="NavContent">
      <div class="NavContent_left">
        <button class="NavContent_Left_Btn">
          <i class="fa-regular fa-circle-play"></i>Start Annovation
        </button>
        <ul class="NavContent_Left_ul">
          <li class="NavContent_Left_li">
            <i class="fa-solid fa-house icon"></i>Home
          </li>
          <li class="NavContent_Left_li">
            <i class="fa-solid fa-database icon"></i>Dataset
          </li>
          <li class="NavContent_Left_li">
            <i class="fa-solid fa-tag icon"></i>Label
          </li>
          <li class="NavContent_Left_li">
            <i class="fa-solid fa-user icon"></i>
            Members
          </li>
          <li class="NavContent_Left_li">
            <i class="fa-solid fa-book-open-reader icon"></i>Guideline
          </li>
          <li class="NavContent_Left_li">
            <i class="fa-solid fa-chart-simple icon"></i>Statistics
          </li>
        </ul>
      </div>
      <div class="NavContent_right">
        <div class="NavContent_right_btn">
          <button class="NavContent_Left_Btn" style="width: 100px">
            Action
            <i class="fa-sharp fa-solid fa-caret-down"></i>
          </button>
          <button
            style="
              width: 80px;
              border-radius: 5px;
              padding: 5px 10px;
              cursor: pointer;
            "
          >
            Detail
          </button

    
        >
        <div class="NavContent_right_search">
          <div class="NavContent_right_search_top">
         <i class="fa-solid fa-magnifying-glass"></i>Search
          </div>
          <div class="NavContent_right_search_top_left">
            <table class="table">
              <thead>
                <tr >
                  <th><input type="checkbox" id="checkbox-all"></th>
                  <th class="text-header">Text</th>
                  <th>Metadata</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Row 1</td>
                  <td>Metadata 1</td>
                  <td> <button class="NavContent_Left_Btn" style="width: 100px">
                    Annotate
                   
                  </button></td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Row 2</td>
                  <td>Metadata 2</td>
                  <td><button class="NavContent_Left_Btn" style="width: 100px">
                    Annotate
                   
                  </button></td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Row 3</td>
                  <td>Metadata 3</td>
                  <td><button class="NavContent_Left_Btn" style="width: 100px">
                    Annotate
                   
                  </button></td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Row 4</td>
                  <td>Metadata 4</td>
                  <td><button class="NavContent_Left_Btn" style="width: 100px">
                    Annotate
                   
                  </button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="NavContent_Right_bottom">
          Rows Per Page
          <select>
            <!-- <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option> -->
            <option selected value="10">10</option>
          </select>
          1-4 of 4
          <div class="Nav_bottom_icon">
            <i class="fa-solid fa-angles-left"></i>
            <i class="fa-solid fa-arrow-left"></i>
            <i class="fa-solid fa-arrow-right"></i>
            <i class="fa-solid fa-angles-right"></i>

          </div>
         
        </div>
      </div>
    </div>
    <div></div>
  </body>
  <script src="./index.js"></script>
  
  <link rel="stylesheet" href="./CSS/Labeling.css" />
</html>