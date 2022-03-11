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

    <?php echo form_open('form/confirm'); ?>

        <fieldset>
            <p class="attention">テスト送信フォーム</p>
            <table>
                <tbody>
                    <tr>
                        <?php echo form_error("name") ?>
                        <th>名前: </th>
                        <td><input type="text" id="name" name="name" value="<?php echo html_escape(set_value("name"));?>" /></td>
                    </tr>
                    <tr>
                        <?php echo form_error("email1") ?>
                        <?php echo form_error("email2") ?>
                        <th>メール: </th>
                        <td><input type="text" name="email1" value="<?php echo html_escape(set_value("email1"));?>" />
                        @
                        <input type="text" name="email2" value="<?php echo html_escape(set_value("email2"));?>" /></td>
                    </tr>
                    <tr>
                    
                        <th>メッセージ記入欄: </th>
                        <td>
                            <textarea name="textarea" id="textarea" cols="100" rows="10"><?php echo html_escape(set_value("textarea"));?></textarea>
                        </td>
                    </tr>
                    <tr>
                    <th>ラジオボックス: </th>
                    <?php echo form_error("choice") ?>
                        <td>
                                <label for="yes"><input type="radio" id="yes" name="choice" value="yes" />はい</label>
                                <label for="no"><input type="radio" id="no" name="choice" value="no" />いいえ</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <p class="submit"><input type="submit" value="確認画面へ"/></p>
    </form>

</body>
</html>
