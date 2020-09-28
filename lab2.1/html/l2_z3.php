<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="../js/task3.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../styles/menu.css">
    <link rel="stylesheet" href="../../styles/commonStyles.css">
    <script src="../../menu.js"></script>
  </head>
  <body>
    <?php
      include '../../menu.php';
    ?>
  <main>
  <p><b>1. ��� ������� �� ������ � id=but1 ����� � id=par1 ������ ��������, � ��� ������� �� ������ c id=but2 ����������.</b></p>
  <div id="code">
    <p id="par1" style="font-size:20px;">������� �� ������ ���� � � �������.</p>
    <input id="but1" type="button" value="�������� �����" />
    <input id="but2" type="button" value="�������� �����" />
  </div>

  <p><b>2. ��� ��������� ������� ���� �� ����� � id=par2 �� ������ ���������� ���������� (������ �������� ����� �������� ������������, 
    �� ���������� ����� ����� ��� �����) � ������� 3 ������ (3000 ����������). ��� ��������� ������� ���� �� ������� ������ �� ������ 
    ���������� ����������� �������� ������������.</b></p>
  <div id="code">
    <p id="par2">�������� �� ���� ������ ���� � � ����� ����������.</p>
  </div>

  <p><b>3. ��� ������� �� ������ � id=but3 ������ �������� wrap1 ������ ���������� �� 0 � ������� 5 ������. ��� ������� �� ������ � id=but4 �������� wrap1 � ������� 7 ������ ������ ���� ��������� ����������� ������.</b></p>
  <div id="code">
    <div id="wrap1"></div><br />
    <input id="but3" type="button" value="����� �������" />
    <input id="but4" type="button" value="��������� �������" />
  </div>
  <hr />

  <p><b>4. �������� �������� ������������ ������� ������� ���������� �� ���� ������ ��������� � �������. �������� ������ �������������� ��� ������� �� ������ � id=but5. </b></p>
  <div id="code">
    <input id="but5" type="button" value="������������ ��������" />
    <br /><br />
    <div id="wrap2">
      <div id="redsquare"></div>
      <div id="square1">
        <b>1.</b>
      </div>
      <div id="square2">
        <b>2.</b>
      </div>
      <div id="square3">
        <b>3.</b>
      </div>
      <div id="square4">
        <b>4.</b>
      </div>
      <div id="square5">
        <b>5.</b>
      </div>
    </div> 
  </div>
</main>
</body>
</html>