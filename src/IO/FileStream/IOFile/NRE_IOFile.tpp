
    /**
     * @file NRE_IOFile.tpp
     * @brief Implementation of Engine's IO's Object : IOFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline IOFile::IOFile(File const& p) : FileStream::FileStream(p) {
            }

            inline std::ios_base::openmode IOFile::getMode() const {
                return std::ios::in | std::ios::out;
            }

            inline std::fstream& IOFile::getStream() {
                return FileStream::getStream();
            }

        }
    }
