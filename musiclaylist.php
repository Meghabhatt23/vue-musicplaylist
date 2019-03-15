<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <head>
        <meta charset="utf-8">
        <title>Music</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

        <body >
            <h1 id="title">Music-playList</h1>
            <br />

            <fieldset>
                <div class="card-body" id="musiclist-div">
                    <ul>


                        <script>
                        function myFunction(x) {
                            x.classList.toggle("fa-thumbs-down");
                        }
                    </script>
                </li>

                <div id= "playlist-div">
                    <!-- <h2> Music Playlist</h2> -->
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

                    <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                </div>
            </div>
        </fieldset>
        <div class="card-body" id="demo-1">
            <fieldset>

                <h5>Songlist</h5>
                <song-list></song-list>

            </fieldset>
        </div>

        <script type="text/javascript" src="vue.min.js"></script>
        <script "text/javascript" src="playlist.js"></script>
    </body>
    </html>
