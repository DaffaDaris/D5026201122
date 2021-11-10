<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Slab&display=swap" rel="stylesheet">
    <style>
        body {
            height: 100%;
            background: linear-gradient(0deg, #ffffff 35%, #12cdd4 80%);
        }

        table {
            width: 100%;
            align-items: center;
            color: #000000;
        }

        th {
            font-size: 50;
        }

        hr {
            border: 2px solid #000000;
            border-radius: 5px solid #000000;

        }

        .toprow {
            background-color: #12cdd4;
            text-align: center;
            font-family: 'Roboto Slab', serif;
            padding: 10px;
            overflow: hidden;
            display: block;
            background-size: contain;
        }

        .homepage {
            background-color: #12cdd4;
        }

        .top {
            font-family: monospace;
        }


        #Daffa {
            font-size: 40px;
            text-align-last: left;
            font-weight: 900;
            font-family: Bebas Neue, cursive;
            color: #eeeeee;
            letter-spacing: 2px;
            text-shadow: 0px 2px 2px #000000;
        }

        #bigName {
            font-size: 28px;
            text-align: right;
            color: #eeeeee;
            font-family: Bebas Neue, cursive;
        }

        #name {
            font-size: 40px;
            color: #000000;
            font-family: 'Roboto Slab', serif;
        }


        #top th a:link,
        #top th a:active,
        #top th a:visited {
            list-style-type: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            display: inline;
            color: inherit;
        }

        #top th a:hover {
            list-style-type: none;
            text-decoration: none;
            color: #eeeeee;
        }

        #pic2 {
            text-align: right;
            padding-right: 50px;
        }

        #aboutMe {
            font-size: 35px;
            font-family: Bebas Neue, cursive;
        }

        #bio {
            font-size: 15px;
            font-weight: 10px;
            text-align: justify;
            font-family: 'Roboto Slab', serif;
        }

        #bioData {
            font-weight: 800;
            text-align: justify;
            font-size: 15px;
            line-height: 15px;
            white-space: initial;
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <div class="toprow">
        <table>
            <tr id="top">
                <th id="Daffa"><a href="#bigName"> &#160 &#160 &#160 Daffa.</a></th>
                <th><a href="#aboutMe">About Me</a></th>
                <th><a href="https://www.instagram.com/daffa_daris/" target="_blank">Social</a>
                </th>
                <th><a href="https://wa.me/6287809686029" target="_blank">Contact</a>
                </th>
            </tr>
        </table>
    </div>
    <div class="homepage">
        <table>
            <tr>
                <td id="bigName"><b id="name">Daffa' Daris<br>Mahendra Ansori</b><br>
                    Student</td>
                <th><img id="pic1" src="images/Daffa.png" width="400" height="400" align="left"></th>
            </tr>
        </table>
    </div>
    <hr>
    <hr>
    <div class="profile">
        <table id="bio">
            <tr>
                <th id="pic2"><img src="images/Guneerre.png" width="272" height="340"></th>
                <td><b id="aboutMe">Penugasan</b><br>
                    <p> Javascript code
                        <script>
                            let n = 3;
                            let string = "";

                            for (let i = 0; i < n; i++) {

                                for (let j = 0; j < i; j++) {
                                    string += " ";
                                }

                                for (let k = i; k < n ; k++) {
                                    string += "# ";
                                }
                                string += "\n";
                            }
                            document.write(`<pre>${string}</pre>`);
                        </script>
                    </p>
                    <p>Java code</p>
                    <p>class Piramidbalik{

                        public static void main(String args[])
                        {
                            int n = 3;
                    
                            printPattern(n);
                        }
                    
                        static void printPattern(int n)
                        {
                            for (int i = 1; i <= n; i++)
                            {
                                for (int j = 1; j < i; j++)
                                {
                                    System.out.print(" ");
                                }
                                for (int j = i; j <= n; j++)
                                {
                                    System.out.print("# ");
                                }
                                System.out.println();
                            }
                        }
                    }</p>

                </td>
            </tr>
        </table>
    </div>
    <hr>
    <hr>
    <div>

    </div>
</body>

</html>