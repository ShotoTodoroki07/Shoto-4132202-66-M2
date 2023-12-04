<form>
2
    <label for="id_p">ID : </label>
3
    <input type="text" name="id" id="id_p"> <br>
4
    <label for="name_p">NAME : </label>
5
    <input type="text" name="name" id="name_p"> <br>
6
    <label for="email_p">EMAIL : </label>
7
    <input type="text" name="email" id="email_p"><br>
8
    <button type="submit">SAVE</button>
9
    <button type="reset">CANCLE</button>
10
</form>
11
​
12
<script>
13
    $(function() {
14
        $("form").submit(function(e) {
15
            e.preventDefault();
16
​
17
            let fm = $(this);
18
            $.ajax({
19
                url: "/add_member.php",
20
                method: "POST",
21
                data: fm.serialize(),
22
                success: function(res) {
23
                    if (res == 'error')
24
                        alert("Can't insert data.")
25
                    else
26
                        $("#tb_member").load("/listItem.php")
27
                }
28
            });
29
        });
30
    });
31
</script>