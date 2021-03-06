<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Course</title>
  <style type="text/css">
body {
  margin: 0;
  padding: 0;
  background-color: #004882;
}

.box {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.box select {
  background-color: #004882;
  color: white;
  padding: 12px;
  width: 400px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}

.box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
}

.box select option {
  padding: 30px;
}
.bg-img{
  background: url('images/img11.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}
  </style>
</head>
<body class="bg-img">
<div class="box">
  <select>
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
    <option>Option 4</option>
    <option>Option 5</option>
  </select>
</div>
</body>
</html>