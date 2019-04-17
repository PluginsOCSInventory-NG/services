$services = Get-WmiObject win32_service | Select *

foreach ($service in $services){
		$xml += "<SERVICE>`n"
		$xml += "<SVCNAME>" + $service.Name + "</SVCNAME>`n"
		$xml += "<SVCDN>" + $service.DisplayName + "</SVCDN>`n"
		$xml += "<SVCSTATE>" + $service.State + "</SVCSTATE>`n"
		$xml += "<SVCDESC>" + $service.Description + "</SVCDESC>`n"
		$xml += "<SVCSTARTMODE>" + $service.StartMode + "</SVCSTARTMODE>`n"
		$xml += "<SVCPATH>" + $service.PathName + "</SVCPATH>`n"
		$xml += "<SVCSTARTNAME>" + $service.StartName + "</SVCSTARTNAME>`n"
		$xml += "<SVCEXITCODE>" + $service.ExitCode + "</SVCEXITCODE>`n"
		$xml += "<SVCSPECEXITCODE>" + $service.ServiceSpecificExitCode + "</SVCSPECEXITCODE>`n"
		$xml += "</SERVICE>`n"
}

# Force UTF8 enconding
[Console]::OutputEncoding = [System.Text.Encoding]::UTF8
[Console]::WriteLine($xml)
