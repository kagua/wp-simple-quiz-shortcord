# wp-simple-quiz-shortcord

WordPressでショートコードで使えるシンプルなクイズプラグインです。

![オープンスポットのコピー](https://github.com/kagua/wp-simple-quiz-shortcord/assets/631291/3a5b43c0-ace3-4cb2-bbe3-c8d0ed12c721)

## プラグイン名

クイズ作成プラグイン

### 説明

ショートコードだけで記事内に、かんたんに選択式のクイズを作成する事が出来ます。

### インストール方法

#### FTPで直接アップロードする場合

- 「wp-simple-quiz-shortcord.zip」を解凍ソフトを使って解凍します。
- 解凍して作成された「wp-simple-quiz-shortcord」フォルダを、「/wp-content/plugins/」ディレクトリにアップロードします。
- WordPress管理画面の「プラグイン」メニューより、「クイズ作成プラグイン」を有効化します。

#### WordPress管理画面からインストールする場合

- WordPress管理画面より、「プラグイン」>「新規追加」>「プラグインのアップロード」とアクセスします。
- 「ファイルを選択」から、添付の「wp-simple-quiz-shortcord.zip」を選択して、「今すぐインストール」をクリックします。
- 「プラグインを有効化」をクリックします。

## 利用方法

- 質問文を[quiz][/quiz]で囲みます。
- 「question」パラメーターに、回答リストを半角カンマ区切りで入力します。
- 「answer」パラメータに、回答を入力します。
- 「kaisetsu」パラメータを入力すると、回答表示時に解説文を表示します。
- 「random="true"」を設定すると、質問がランダムに並び替えられて表示されます。

ショートコードサンプル：

[quiz question="土浦市,日立市,古河市,水戸市" answer="水戸市" kaisetsu="水戸市の人口は約27万人です。" random="true"]茨城県の県庁所在地を答えなさい。[/quiz]

以上
