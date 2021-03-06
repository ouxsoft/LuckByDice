<p align="center"><img src="https://raw.githubusercontent.com/ouxsoft/LuckByDice/main/docs/logo.png" alt="LuckByDice"/></p>

<p align="center">
<a href="https://travis-ci.com/github/ouxsoft/LuckByDice"><img src="https://travis-ci.com/ouxsoft/LuckByDice.svg?branch=main" alt="Build Status"></a>
<a href="https://luckbydice.readthedocs.io/en/latest/?badge=latest"><img src="https://readthedocs.org/projects/luckbydice/badge/?version=latest" alt="Documentation Status"></a>
<a href="https://app.codacy.com/gh/ouxsoft/LuckByDice?utm_source=github.com&utm_medium=referral&utm_content=ouxsoft/LuckByDice&utm_campaign=Badge_Grade"><img alt="Codacy grade" src="https://api.codacy.com/project/badge/Grade/582663c71dcf45ecbba3d61ab8f5e70c"></a>
<a href="https://codecov.io/gh/ouxsoft/LuckByDice">
  <img src="https://codecov.io/gh/ouxsoft/LuckByDice/branch/main/graph/badge.svg?token=XGN6H6MAUP"/>
</a>

</p>

<p align="center">
<a href="https://packagist.org/packages/ouxsoft/luckbydice"><img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/ouxsoft/luckbydice"></a>
<a href="#tada-php-support" title="PHP Versions Supported"><img alt="PHP Versions Supported" src="https://img.shields.io/badge/php-7.3%20to%208.0-777bb3.svg?logo=php&logoColor=white&labelColor=555555"></a>
</p>

A library for simulating luck based dice rolls from dice notations written in PHP.

Example of supported dice notation: `d4,2d6,3d8+2,4d10*2,5d20+10*2,6d20-2,d%`

This graph shows 10,000 consecutive `10d10` LuckByDice rolls. Notice how outcome impacts luck and vice versa.
<p align="center"><img src="https://raw.githubusercontent.com/ouxsoft/LuckByDice/main/docs/statistics.png" alt="statistics"/></p>

## Installation


### Via Composer
LuckByDice is available on [Packagist](https://packagist.org/packages/ouxsoft/luckbydice).

Install with [Composer](https://getcomposer.org/download/):
```shell script
composer require ouxsoft/luckbydice
```

### Via Git
Install with [Git](https://git-scm.com/):
```shell script
git clone git@github.com:ouxsoft/LuckByDice.git
```

## Documentation
Read our docs for usage [luckbydice.readthedocs.io](https://luckbydice.readthedocs.io).

## Contributing
LuckByDice is an open source project. If you find a problem or want to discuss new features or improvements
please create an issue, and/or if possible create a pull request.