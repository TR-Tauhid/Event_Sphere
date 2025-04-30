pipeline {
    agent any

    environment {
        APP_ENV = 'testing'
        DB_CONNECTION = 'sqlite'
    }

    stages {
        stage('Clone') {
            steps {
                git url: 'https://github.com/TR-Tauhid/Event_Sphere.git', branch: 'main'
            }
        }

        stage('Build') {
            steps {
                sh 'docker-compose down'
                sh 'docker-compose build'
                sh 'docker-compose up -d'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'docker exec event_sphere_app composer install'
            }
        }

        stage('Run Tests') {
            steps {
                sh 'docker exec event_sphere_app php artisan test'
            }
        }
    }

    post {
        always {
            sh 'docker-compose down'
        }
    }
}
