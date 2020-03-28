<!-- MVP.css quickstart template: https://github.com/andybrewer/mvp/ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://via.placeholder.com/70x70">
    <link rel="stylesheet" href="mvp.css">

    <meta charset="utf-8">
    <meta name="description" content="Tilde server designed to host one user, and one user only... all of you!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tilde One</title>
</head>

<body>
    <header>
        <nav>
	    <h1>tilde one</h1>
            <ul>
                <li><a href="https://tildegit.org/one/setup">Join</a></li>
                <li><a href="https://tildegit.org/one/site">Source</a></li>
            </ul>
        </nav>
        <h1>Welcome to the tilde server for one</h1>
        <p>Come and join the collective!</p>
        <br>
    </header>
    <main>
        <hr>
        <article>
            <h2>Frequently Asked Questions</h2>
            <details>
                <summary>What is a tilde server?</summary>
                <p>In this context, a tilde server is any public server that provides free login access to anyone who wants access to it.</p>
            </details>
            <details>
                <summary>Why is there only one user account?</summary>
                <p>This would not exactly be "Tilde One" if there was more than one user, right?</p>
            </details>
            <details>
                <summary>If there is only one user account, how do others join?</summary>
                <p>
		Everyone is sharing the same account! When a user joins, they are given login access to the same one user as everyone else. In fact, not only will everyone be sharing the same user account, but <b>also</b> the same terminal session via <a href="https://en.wikipedia.org/wiki/Tmux">tmux</a>.
		</p>
            </details>
            <details>
                <summary>I have never used tmux before, how do I use it?</summary>
                <p>While there are many resources out there for how to use tmux, I personally suggest starting with this <a href="https://tmuxcheatsheet.com/">cheatshseet</a>.</p>
            </details>
            <details>
                <summary>How do I join?</summary>
		<p>Simply follow the steps <a href="https://tildegit.org/one/setup/src/branch/master/README.md">here</a> to join.</p>
            </details>
            <details>
                <summary>How to I close my SSH session without closing the tmux window?</summary>
		<p>The setup is done such that detaching from the session using <samp>Ctrl-b d</samp> will also result in logging out of your SSH session.</p>
            </details>
            <details>
                <summary>That all sounds crazy!</summary>
                <p>This is not a question, but yes, it is crazy!</p>
            </details>
        </article>
    </main>
    <footer>
        <hr>
        <p>
	    Have a question? Ask on the <a href="https://tilde.chat">IRC server</a> in the <u>#one</u> channel or via an issue on the <a href="https://tildegit.org/one/setup/issues/new">git repository</a>
        </p>
    </footer>
</body>

</html>
