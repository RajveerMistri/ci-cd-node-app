pipeline {
    agent any

    stages {
        stage('Docker Environment Check') {
            steps {
                bat '''
                    echo ===== DOCKER VERSION =====
                    docker --version

                    echo ===== DOCKER CONTEXT =====
                    docker context show

                    echo ===== DOCKER INFO PROXY =====
                    docker info

                    echo ===== PROXY ENVIRONMENT =====
                    set HTTP_PROXY
                    set HTTPS_PROXY
                    set NO_PROXY
                '''
            }
        }
    }
}