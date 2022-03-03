<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_step1</title>
</head>

<body>

    <h1>Step1</h1>

    <?php echo validation_errors(); ?>
    <?php echo form_open('form'); ?>

        <fieldset>
            <p class="attention">テスト送信フォーム</p>
            <table>
                <tbody>
                    <tr>
                        <th>名前: </th>
                        <td><input type="text" id="name" name="name" value="" /></td>
                    </tr>
                    <tr>
                        <th>メール: </th>
                        <td><input type="text" name="email1" value="" />
                        @
                        <input type="text" name="email2" value="" /></td>
                    </tr>
                    <tr>
                        <th>メッセージ記入欄: </th>
                        <td>
                            <textarea name="textarea" id="textarea" cols="100" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                    <th>ラジオボックス: </th>
                        <td>
                                <label for="yes"><input type="radio" id="yes" name="choice" value="yes" />はい</label>
                                <label for="no"><input type="radio" id="no" name="choice" value="no" />いいえ</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <p class="submit"><input type="submit" value="提出"/></p>
    </form>

</body>
</html>