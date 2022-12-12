import os
import sys
import fileinput

textToSearch = 'important'

textToReplace = "IMPORTANT"

#print ("File to perform Search-Replace on:")
fileToSearch  = 'C:\Users\NAVEEN\Downloads\\abc.txt'
#fileToSearch = 'D:\dummy1.txt'

tempFile = open( fileToSearch, 'r+' )

for line in fileinput.input( fileToSearch ):
    
    tempFile.write( line.replace( textToSearch, textToReplace ) )
tempFile.close()


#input( '\n\n Press Enter to exit...' )