<html><body>

<form action='/cgi/admin.ml' method='post' name='frm'>

<input name="login" value="<?=$_POST['login']?>" type="hidden"/>
<input name="pass" value="<?=$_POST['pass']?>" type="hidden"/>
<input name="course" value="<?=$_POST['course']?>" type="hidden"/>

</form>

<script language="JavaScript">
document.frm.submit();
</script>

</body></html>
