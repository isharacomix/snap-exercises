Snap Exercise Framework
=======================
This framework makes it possible to build guided exercises using the [SNAP][] programming language.

Features
--------
 * Create guided "hour-of-code" style programming exercises
 * Collect data from students
 * Freely available under the Affero GPL


How to make exercises
---------------------
Exercises are located in the '''/lessons/''' folder. To create a new lesson, create a folder for your new lesson and copy the '''index.html''' from one of the other lessons. Then, create a file named '''listing.js''' that contains the following code.

    var btn_to_name = [
      "part1",
      "part2",
      "part3",
      "part4",
      "freeplay",
      ];

Each string in this array represents one of the steps in your exercise, and each step requires a file that represents how the exercise is displayed.

 * '''answers/part1.png''': The solution to the problem, as an image
 * '''lefttext/part1.html''': The writeup that appears to the left of Snap
 * '''modaltext/part1_modal.html''': The popup that appears when the problem begins
 * '''xml/part1.xml''': The problem specs.

The last exercise should always be a "free-play" exercise that students work on after they complete their work, but you can customize the pop-up/left-text to encourage them to continue creating animations in a certain way.

When developing an exercise in XML, you can hide blocks by putting their technical names in the &lt;hidden&gt; section, and you can also create custom blocks. The easiest way to go about this is to start with the '''example.xml''' (which has all blocks hidden by default) and remove the blocks you want students to be allowed to use. You should also updated the 'name' and 'app' fields to be unique.


How to collect data
-------------------
If this repository is hosted on a server with PHP support, each time a student runs their program, a snapshot of their program formatted in JSON will be saved to the folder '''/flatfiles/''' (make sure PHP can write to that folder!). Files are saved in the format '''XXXXXX_YYYYYY_ZZZZZZ.txt''' where X is a hash of the user's IP address, Y is a random session ID, and Z is the timestamp.

When collecting data, be sure that you put a unique identifier in the 'app' field of the exercises so that you can distinguish between which activities the snapshots are coming from.


Host on Github Pages
--------------------
If you clone this repository, you can go directly to '''USERNAME.github.io/snap-exercises''' to try out your exercises and share them with others. Note that because github does not support php, you can not collect user data this way.


[SNAP]: http://snap.berkeley.edu
