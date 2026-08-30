pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'rajveermistri/ci-cd-node-app:latest'
    }

    stages {

        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Test') {
    steps {
        bat 'npm ci'
        bat 'npm test'
    }
}

        stage('Build Docker Image') {
            steps {
                bat 'docker build -t %DOCKER_IMAGE% .'
            }
        }

        stage('Docker Network Test') {
    steps {
        bat 'docker info'
        bat 'docker context show'
        bat 'docker version'
    }
}

        stage('Push Docker Image') {
            steps {
                bat 'docker push %DOCKER_IMAGE%'
            }
        }
    }
}