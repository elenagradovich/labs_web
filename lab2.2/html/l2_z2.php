<html>
<head>
  <meta charset="utf-8">                                                   
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script type="text/javascript" src="../js/task2.js"></script>
  
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../../styles/menu.css">
  <link rel="stylesheet" href="../../styles/commonStyles.css">
</head>
<body>
  <?php
    include '../../menu.php';
  ?>
  <main>
      <p><b>1. ����� ���������� ������� �� ������ � id="but1" ���� ������ ������ � id="par1" ������ ���������� �� �������, � ������ ��� ������ ������ ����� ������ 20px. ��� ������� ������� �� ������ � id="but1" ���������� ������ � id="par1" ������ ������������ �� �����������.</b></p>
      <div id="code">
        <h3 id="par1">� ������ ��������� �� ��������.</h3>
        <p id="par1">� ������ ����� �� ��������.</p>
        <input id="but1" type="button" value="������� �� ����" />
      </div>

      <p><b>2. ��� ��������� ��������� ���� �� ������ c id="href1" �� ���� ������ ���������� �� ���������. ��� ��������� ��������� ���� �� �� ������� ���������� ������ ��������� �� �����������.</b></p>
      <div id="code">
        <a id="href1" href="http://www.google.ru/">www.google.ru</a>
      </div>

      <p><b>3. ��� ��������� ������ �������� � id="text1" ��� ���� ������ ���������� �� �������, � ������ ������ ������ ����� ������ 20px.</b></p>
      <div id="code">
        <input type="text" id="text1" value="�������� ��� �����" />
      </div>
      
      <p><b>4. ��� ������ ������ �� ������ � id=but2 ���������� ������ � id=par2 ������ �������� ��������� �������:</b></p>
      <ul>
        <li>����� ������ ���� ��������� ������� Times New Roman �������� �����;</li>
        <li>����� ������ ���� ��������� ������� Arial ������ �����;</li>
        <li>����� ������ ���� ��������� ������ ������� Verdana, � ������ �������� 1 ������� (<i>����������� �������� font-weight:bold ��� ����, ����� ������� ����� 
        ������ � �������� border-style ��� ������� ������� �������</i>)</li>
      </ul>
      <div id="code">
        <p id="par2">��� ���������� ����� �������� ����� ������� ������� �� ������ ����.</p>
        <input id="but2" type="button" value="�������� ���������� ������" />
      </div>
    </main>
</body>
</html>
