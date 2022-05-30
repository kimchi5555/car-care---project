<html>
    <head><title>간단한 자동차 관리</title></head>
    <body><br><center><h2>모 델 입 력</h2><hr>
    <form name=f2 method=post action="insert_db.php">
        <table border=0 width=500 height=180 bgcolor=#ffc>
            <tr>
                <td height=20></td>
            </tr>
            <tr>
                <br>
                <td width=20% height=30 align=right><b>차량번호 : </b></td>
                <td>&nbsp;<input type="text" maxlength=10 size=12 name='sno'></td>
            </tr>
            <tr>
                <br>
                <td width=20% height=30 align=right><b>차량명 : </b></td>
                <td>&nbsp;<input type="text" maxlength=10 size=12 name='name'></td>
            </tr>
            <tr>
                <br>
                <td height=30 align=right><b>제조사 : </b></td>
                <td>&nbsp;<input type="text" size=40 name='car'></td>
            </tr>
            <tr>
                <td height=40% align=center colspan=2>
                    <input type=submit value="입력하기">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type=reset value="다시작성">
                </td>
            </tr>
        </table>
    </form>
    😎 [ <a href="main.php">메인 화면</a> ]&nbsp; | &nbsp;
    [ <a href="data_output.php">결과 화면</a> ] 😎</center>
    </body>
</html>