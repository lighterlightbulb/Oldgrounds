# Oldgrounds
A fan recreation of Newgrounds, with goals to recreate to add in more of a social network feel into it.

This repository contains no copyrighted, or stolen code. All content here is 100% original. Oldgrounds is not sponsored by, or hosted by Newgrounds.

## Features
- Selling Feature: Customizability
    - User CSS modification
    - Jukebox, upload a song that represents you
    - Site customizability is up to the user
- User security
    - We don't collect your data, either:
        - The only data collected using the Oldgrounds web service is your E-Mail address, which only happens via registration. Even this is encrypted.
    - We don't sell your data
    - All private user details (e.g E-Mail addresses) are securely encrypted with military grade encryption
    - Modern-day Argon2 password hashing, winner of the [Password Hashing Contest](https://password-hashing.net/)
    - Extensive privacy controls
    - Top-notch security
- Open source, public domain software
- Programmed by someone with over 10 braincells
- Docker, which makes setting up exponentially easier, and helps with security

## How can I help?
If you know how to code, contribute using pull requests. If you like to test stuff, join the website and test the craziest stuff you can think of and try to find bugs, then report them in issues. Everything helps!

## License
This is free and unencumbered software released into the public domain.

## Contact
Visit us at https://oldgrounds.hitius.com/

## How to set up
### Prerequisites
- Docker

### Process
1. Clone the Git repository to a folder
2. Configure your setup in `docker-compose.sample.yml` with stuff such as MySQL passwords, etc.
3. Match the compose configuration with the website's environment in `/website/data/environment/`. Each setting is documented, so this should be fairly easy.
4. Run `docker-compose up --build --force-recreate --remove-orphans` on the root folder.
5. There should now be a folder named `container`. Copy `/website/data/` into `/container/website/data/`.
6. Everything *should* be working at this point. If not, please submit an issue.