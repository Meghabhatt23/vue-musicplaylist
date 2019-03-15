<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>musicplaylist</title>
    </head>
    <body style="background-color:#838282; color:#C01808;">
        <div id= "playlist-div">
        <h2> Music Playlist</h2>
              <ul>
                  <li v-for="song in playlist"> &copy;Artist : {{ song.artist }}
                      &nbsp;&nbsp;&nbsp;
                      Title:{{ song.title }}
                   </li>
              </ul>
            <strong> Artist:</strong>
            <input type= "text" v-model="newArtist" />
            <strong> Title : </strong>
            <input type= "text" v-model="newTitle" /><br /><br />
            <button @click ="addSong" >Add </button>
            <button @click ="removeSong" >Remove </button>
    </div>

    <script type="text/javascript" src="js/vue.js"></script>
    <script "text/javascript" src="js/events.js"></script>
    </body>
</html>
