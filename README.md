# Simple PHP Application with Docker

This repository contains a simple PHP web application running on Apache, configured with `mod_rewrite` for URL routing. It is designed to be a minimal and flexible template for deploying PHP applications with Docker.

## Features
- **PHP 8.2** with Apache web server
- **`mod_rewrite` enabled** for URL routing (ideal for frameworks like Laravel, Symfony, etc.)
- Easy to deploy and run with Docker

## Getting Started

To get a copy of this project running on your local machine, follow these simple steps:

### Prerequisites
- **Docker**: Make sure Docker is installed on your system. If not, follow the [installation guide](https://docs.docker.com/get-docker/).

### 1. Clone the repository

Clone this repository to your local machine:

```bash
git clone https://github.com/esedgarcia/a-php.git
cd a-php
```

### 2. Build the Docker image

If you want to build the image from source:

```bash
docker build -t esedgarcia/a-php .
```

### 3. Run the Docker container

To run the container locally, use the following command:

```bash
docker run -p 8080:80 esedgarcia/a-php
```
