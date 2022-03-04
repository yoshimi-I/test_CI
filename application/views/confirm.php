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

        <fieldset>
            <p class="attention">テスト送信フォーム</p>
            <table>
                <tbody>
                    <tr>
                        <th>名前: </th>
                        <td><?php echo $name ?></td>
                    </tr>
                    <tr>
                        <th>メール: </th>
                        <td><?php echo $email1 ?>
                        @
                        <?php echo $email2 ?></td>
                    </tr>
                    <tr>
                        <th>メッセージ記入欄: </th>
                        <td>
                            <textarea name="textarea" id="textarea" cols="100" rows="10"><?php echo $textarea ?></textarea>
                        </td>
                    </tr>
                    <tr>
                    <th>ラジオボックス: </th>
                        <td>
                                <?php echo $choice ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <p class="submit"><input type="submit" value="編集" name = "edit"/></p>
        <p class="submit"><input type="submit" value="このまま送信" name="submit"/></p>
    </form>

</body>
</html>