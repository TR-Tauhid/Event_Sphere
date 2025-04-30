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

        stage('Install PHP Dependencies') {
            steps {
                bat 'composer install'
            }
        }

        stage('Install JS Dependencies') {
            steps {
                bat 'npm install'
            }
        }

        stage('Build Assets with Vite') {
            steps {
                bat 'npm run build'
            }
        }

        stage('Generate App Key') {
            steps {
                bat 'copy .env.example .env'
                bat 'php artisan key:generate'
            }
        }

        stage('Run Tests') {
            steps {
                bat 'php artisan test'
            }
        }
    }
}
