from django.shortcuts import render

def home(request):
    return render(request, 'index.html')

from django.db import models

class Client(models.Model):
    name = models.CharField(max_length=100)
    email = models.EmailField()
    phone = models.CharField(max_length=15)


