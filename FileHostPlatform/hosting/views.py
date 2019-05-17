from django.shortcuts import render
from django.http import HttpResponseRedirect
from django.core.files.storage import FileSystemStorage
# Create your views here.

def hosting(request):
    if request.method == 'POST':
        uploaded_file = request.FILES['document']
        print(uploaded_file.name)
        fs = FileSystemStorage()
        fs.save(uploaded_file.name,uploaded_file)
    return render(request, 'index.html')


