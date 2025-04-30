pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                git branch: 'main', url: 'https://github.com/TR-Tauhid/Event_Sphere.git'
            }
        }

        stage('Build') {
            steps {
                bat 'echo Building Laravel App'
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'composer install'
            }
        }

        stage('Run Tests') {
            steps {
                bat 'php artisan test'
            }
        }
    }
}
