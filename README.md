# Text to Voice Generator Using Eleven Lab API

## Overview

The Text to Voice Generator is a web application that allows users to convert text into audio using various voice models. This application leverages the Eleven Labs API for text-to-speech functionality. Users can input their desired script, choose a voice model, and generate an audio file in MP3 format.

## Features

- **User-Friendly Interface:** The application provides a clean and intuitive user interface.
- **Voice Models:** Users can select from a range of voice models to personalize the generated audio.
- **Character Counter:** A character counter dynamically displays the number of characters in the input text.
- **Download Option:** After generating the audio, users can conveniently download the resulting MP3 file.

## Demo
 [Click Here To See Live Demo](https://ashifraza.in/voicelab/)

## Usage

1. Enter your desired script in the text area.
2. Choose a voice model from the dropdown menu.
3. Optionally, monitor the character count displayed.
4. Click the "Generate" button to create the audio.
5. Download the generated audio file using the provided link.

## Dependencies

- jQuery v3.6.4
- Eleven Labs API (requires an API key)

## Configuration

1. Obtain an API key from Eleven Labs and replace the placeholder in `lib.php`.
2. Customize the available voice models in the `<select>` element in `index.php`.

## Styling

The application features a responsive design, ensuring usability on various devices. The `styles.css` file contains styling rules for a visually appealing and user-friendly experience.

## File Structure

- `index.php`: The main HTML file containing the user interface and script execution logic.
- `lib.php`: PHP script handling the communication with the Eleven Labs API and saving the generated audio file.
- `styles.css`: Cascading Style Sheets for styling the application.

## Additional Notes

- Ensure that the API key is kept confidential and not shared publicly.
- This application is optimized for desktop and mobile devices, with responsive design elements.

Happy generating!
