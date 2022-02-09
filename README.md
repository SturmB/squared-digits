<div id="top"></div>

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
<h3 align="center">Squared Digits</h3>

  <p align="center">
    PHP assessment and refresher (IEL-SE-1)
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This is a simple PHP script designed to both refresh my knowledge of PHP in addition to serving as an assessment for potential employers.

It takes all the integers from a specified number down to 1 and checks to see how many of them reduce to 89 using a "squared digits" algorithm.

The "squared digits" algorithm means that the digits of each number are individually squared, then summed together to reach a new number. The algorithms continue this process with each new number derived.

There are two algorithms, each results in a different count at the end.

### get_repeating_val

The "get_repeating_val" stays true to the spirit of the assignment in that it returns the first value that repeats during the loop. Although this is more technically correct, it does not lead to the assignment's expected counts at the end, thus the need for the other algorithm,

### get_looping_val

The "get_looping_val" algorithm searches for the first instance of "89" or "1" in the loop and (rightfully) assumes that it will eventually loop back to that number again, so it immediately returns that number.

This algorithm eventually leads to the correct counts as defined in the initiall assignment.

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [PHP 8.1](https://php.net/)

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- USAGE EXAMPLES -->
## Usage

As this is a simple PHP script, the best way to use it is by running it in your favorite IDE.

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- LICENSE -->
## License

Distributed under the ISC License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Chris McGee - [@SturmB](https://twitter.com/SturmB) - chris@chrismcgee.info

Project Link: [https://github.com/SturmB/squared-digits](https://github.com/SturmB/squared-digits)

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/SturmB/squared-digits.svg?style=for-the-badge
[contributors-url]: https://github.com/SturmB/squared-digits/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/SturmB/squared-digits.svg?style=for-the-badge
[forks-url]: https://github.com/SturmB/squared-digits/network/members
[stars-shield]: https://img.shields.io/github/stars/SturmB/squared-digits.svg?style=for-the-badge
[stars-url]: https://github.com/SturmB/squared-digits/stargazers
[issues-shield]: https://img.shields.io/github/issues/SturmB/squared-digits.svg?style=for-the-badge
[issues-url]: https://github.com/SturmB/squared-digits/issues
[license-shield]: https://img.shields.io/github/license/SturmB/squared-digits.svg?style=for-the-badge
[license-url]: https://github.com/SturmB/squared-digits/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/mcgee
[product-screenshot]: images/screenshot.png