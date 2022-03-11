<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>

<body>

    <h1>確認画面</h1>
    <p>入力した値はこちらでよろしいですか？</p>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/send'); ?>

        <fieldset>
            <p class="attention">テスト送信フォーム</p>
            <table>
                <tbody>
                    <tr>
                        <th>名前: </th>
                        <td><?php echo $name ?>
                            <?php echo form_hidden("name",$this->input->post("name",TRUE))?></td>

                    </tr>
                    <tr>
                        <th>メール: </th>
                        <td><?php echo $email1 ?>
                        <?php echo form_hidden("email1",$this->input->post("email1",TRUE))?>
                        @
                        <?php echo $email2 ?></td>
                        <?php echo form_hidden("email2",$this->input->post("email2",TRUE))?>
                    </tr>
                    <tr>
                        <th>メッセージ記入欄: </th>
                        <td>
                        <?php echo $textarea ?></td>
                            <?php echo form_hidden("textarea",$this->input->post("textarea",TRUE))?>
                        </td>
                    </tr>
                    <tr>
                    <th>ラジオボックス: </th>
                        <td>
                                <?php echo $choice ?>
                                <?php echo form_hidden("choice",$this->input->post("choice",TRUE))?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <p class="submit"><input type="submit" value="編集" name = "submit"/></p>
        <p class="submit"><input type="submit" value="このまま送信" name="submit"/></p>
    </form>

</body>
</html>