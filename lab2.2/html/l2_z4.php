<html>                                                                  
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script type="text/javascript" src="../js/task4.js"></script>
  <script src="../../menu.js"></script>
  <link rel="stylesheet" href="../css/style4.css">
  <link rel="stylesheet" href="../../styles/menu.css">
  <link rel="stylesheet" href="../../styles/commonStyles.css">                                                      
</head>
<body> 
  <?php
    include '../../menu.php';
  ?>
  <main>
    <p><b>1. ����� ������� �� ������ � id=but1 ���������� ���������� ������ � id=par1 ������ ���� ������� � ��������� � ����� � id=par2.</b></p>
    <div id="code">
    <p id="par1">���������� ������� ������.</p>
    <p id="par2">�������� � ���� ���������� ������� ������.</p>
    <input id="but1" type="button" value="����������� ���������� ������ par1 � par2" />
    </div>

    <p><b>2. ����� ������� �� ������ � id=but2 � ������ par3, par4, par5 � par6 ������ ����������� ����������� �����. ����� ��� ������� ������ ���� �������� ������ �������.</b></p>
    <div id="code">
    <p id="par3"> ��� �������� ���-������� ������������ - </p>
    <p id="par4"> - ������������ ��� ���������� HTML �������.</p>
    <p id="par5"> - ������������ ��� ��������� ���������� �������� ������������� ���������.</p>
    <p id="par6"> - JavaScript ���������� ����������� ���������� ��������� ����.</p>
    <input id="but2" type="button" value="�������� � ������ ���� ����������� �����" />
    </div>

    <p><b>3. ����� ������� �� ������ � id=but3 �������� � id=href1, id=par7 � type=text ������ ����� ������������ �������������� ������ �����������.</b></p>
    <div id="code">
      <a id="href1" href="http://www.google.ru/">������ ���� ���������� �������� ����� �������� href.</a> 
      <p id="par7" class="afterbutton"> ����� ������ � id=but3 ����������� �������� ����� �������� class.</p>
      <input type="text" value="����� ������� �������� ����������� ����� 'key'" />
      <br /><br />
      <input id="but3" type="button" value="�������� ��������" />
    </div>

    <p><b>4. ����� ������� �� ������ � id=but4 �������� ������ ����� ������������ �������������� ������ �����������. 
    (����������� ����� ��� ������ ����� ������ �������� ������ � ���� � ���������������� id: style1, style2, style3, style4.) </b></p>
    <div id="code">
    <p id="par8" >����� ����� �������� ��������� ������ ������� Verdana.</p>
    <p id="par9" >����� ����� �������� ��������� ������� �������� ����� �������� 20 ��������.</p>
    <p id="par10" >����� ����� �������� ��������� ����� ������� Times New Roman.</p>
    <p id="par11" >����� ����� �������� ��������� ������� ������� Arial �������� 25 ��������.</p>
    <input id="but4" type="button" value="��������� ���������� � �������" />
    </div>
  </main>
</body>
</html>
